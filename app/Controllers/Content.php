<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContentModel;
use App\Models\PageModel;
use App\Entities\Contents;
use CodeIgniter\Exceptions\PageNotFoundException;

class Content extends BaseController
{
    private ContentModel $model;
    public function __construct()
    {
        $this->model = new ContentModel();
    }
    public function index()
    {
        $content = $this->model->paginate(10);
        return view("Content/index", ["contents"=> $content,
        "pager" => $this->model->pager]);
        
    }
    public function new(){

        $pageModel = new PageModel();

        $data["pageIds"] = $pageModel->select("*")->findAll();
       
            
        return view("Content/newContent", $data, [
            "content" => new Content, 
           
        ]);
    }

    public function create(){
        $postData = new Contents($this->request->getPost());
        $postImage = $this->request->getFile("content_image");
        $newName = $postImage->getRandomName();
        $postImage->move("public/content_images/", $newName);
        $postData->content_image = $newName;

        $backImage = $this->request->getFile("background_img");
        $newName2 = $backImage->getRandomName();
        $backImage->move("public/background_img/", $newName2);
        $postData->background_img = $newName2;
        $id = $this->model->protect(false)->insert($postData);

        if($id === false){
            return redirect()->back()->with("errors",
            $this->model->errors())->withInput();
        }
        return redirect()->to("content/$id")->with("message","Content Saved");


      
    }

    public function show($id){
        $content = $this->getContentOr404($id);

        return view("Content/show", ["content" => $content]);
        

    }

    

    public function delete($id){
        $content = $this->getContentOr404($id);
        //if it is posted yes
        
            $this->model->delete($id);

            return redirect()->to("content/show")->with("message","Page deleted");
    }

    public function edit($id){
    

        $content = $this->getContentOr404($id);

        return view("Content/edit", ["content"=> $content]);
    }

    public function update($id){
        //it will find the article in the data by id
        $content = $this->getContentOr404($id);
        
        //it will assign all the properties at once using fill
        $content->fill($this->request->getPost());
        //it will check if any change made to properties
        $content->__unset("_method");

        if(! $content->hasChanged()){
            return redirect()->back()
            ->with("message", "Nothing to update...");
        }
        //it will save the article
        if($this->model->save($content)){
            return redirect()->to("content/index")
            ->with("message", "Content Updated.");
        }

        return redirect()->back()
        ->with("errors", $this->model->errors())
        ->withInput();
    }

    private function getContentOr404($id): Contents{
        $content = $this->model->find($id);

        if($content === null){
            throw new PageNotFoundException("Content with id $id not found.");
        }
        return $content;
}
}
