<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PageModel;
use App\Entities\Page;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    private PageModel $model;
    public function __construct()
    {
        $this->model = new PageModel();
    }
    public function index()
    {
        
    }
    public function new(){
            
        return view("Pages/newPage", [
            "pages" => new Page
        ]);
    }

    public function create(){
        $page = new Page($this->request->getPost());
        $id = $this->model->insert($page);
        if($id){
            return redirect()->to("page/show")->with("message", "Page added.");
        }
        
        return redirect()->back()->with("errors",$this->model->errors());
        
    }

    public function show(){
        // $pages = $this->getPageOr404($id);
        $pages = $this->model->findAll();
        return view("Pages/index", ["pages"=> $pages]);

    }

    public function confirmDelete($id){
        $page = $this->getPageOr404($id);

        return view("Pages/delete", ["page"=> $page]);
    }

    public function delete($id){
        $page = $this->getPageOr404($id);
        //if it is posted yes
        
            $this->model->delete($id);

            return redirect()->to("page/show")->with("message","Page deleted");
    }

    public function edit($id){
    

        $page = $this->getPageOr404($id);

        return view("Pages/edit", ["page"=> $page]);
    }

    public function update($id){
        //it will find the article in the data by id
        $page = $this->getPageOr404($id);
        //it will assign all the properties at once using fill
        $page->fill($this->request->getPost());
        //it will check if any change made to properties
        $page->__unset("_method");

        if(! $page->hasChanged()){
            return redirect()->back()
            ->with("message", "Nothing to update...");
        }
        //it will save the article
        if($this->model->save($page)){
            return redirect()->to("page/show")
            ->with("message", "Article Updated.");
        }

        return redirect()->back()
        ->with("errors", $this->model->errors())
        ->withInput();
    }

    private function getPageOr404($id): Page{
        $page = $this->model->find($id);

        if($page === null){
            throw new PageNotFoundException("Page with id $id not found.");
        }
        return $page;
}

}