<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PageModel;
use App\Models\ContentModel;
use App\Models\UserModel;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Exceptions\PageNotFoundException;

class Admin extends BaseController
{
    private PageModel $pageModel;
    private ContentModel $contentModel;

    private UserModel $userModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
        $this->pageModel = new PageModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $pages = $this->pageModel->findAll();
        $totalPages = $this->pageModel->countAllResults();
        $totalContent = $this->contentModel->countAllResults();
        $totalUsers = $this->userModel->countAllResults();
        $totalBanner = $this->contentModel->where("content_section", "hero")->countAllResults();
        
        return view("auth/dashboard", ["totalBanner"=>$totalBanner, "totalUsers" => $totalUsers,"totalContent" => $totalContent, "totalPages"=> $totalPages, "pages" => $pages]);
    }

    public function showUser($id){

        $user = $this->getUserOr404($id);
        $pages = $this->pageModel->findAll();

        return view("auth\showUser", ["pages" => $pages, 
        "user"=> $user]);
    }

    public function viewAllUsers(){
        helper("admin");
        $pages = $this->pageModel->findAll();
        $users = $this->userModel->paginate(10);
        
        return view("auth/viewAllUsers", ["pages" => $pages, "users" => $users,
        "pager"=> $this->userModel->pager]);
        
    }

    public function groups($id){
        $pages = $this->pageModel->findAll();
        $user = $this->getUserOr404($id);
        //If a any changes occured
        if($this->request->is("post")){
            //if any group is selected or not
            $groups = $this->request->getPost("groups") ?? [];

            $user->syncGroups(...$groups);

            return redirect()->to("admin/users/$id")
                ->with("message","User Saved");
        }

        return view("auth/groups", ["pages" => $pages, "user"=> $user]);
    }

    public function permissions($id){
        $user = $this->getUserOr404($id);
        $pages = $this->pageModel->findAll();
        //If a any changes occured
        if($this->request->is("post")){
            //if any group is selected or not
            $permissions = $this->request->getPost("permissions") ?? [];

            $user->syncPermissions(...$permissions);

            return redirect()->to("admin/users/$id")
                ->with("message","User Saved");
        }

        return view("auth\permissions", ["pages" => $pages, "user"=> $user]);
    }

    private function getUserOr404($id): User{
        $user = $this->userModel->find($id);

        if($user === null){
            throw new PageNotFoundException("User with id $id not found.");
        }
        return $user;
    }

   
   
}
