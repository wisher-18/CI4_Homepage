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
    private PageModel $pageModel;
    public function __construct()
    {
        $this->model = new ContentModel();
        $this->pageModel = new PageModel();
    }
   
    public function index()
    {
       
        $pages = $this->pageModel->findAll();
        $content = $this->model->paginate(10);
       
        return view("Content/index", ["contents"=> $content, "pages"=>$pages,
        "pager" => $this->model->pager]);
        
    }
    public function new(){

        $pages = $this->pageModel->findAll();

        return view("Content/newContent", ["pages" => $pages,
            "content" => new Content(), 
           
        ]);
    }

    public function create(){
        $postData = new Contents($this->request->getPost());
       // Check if a new content_image is uploaded
       $postImage = $this->request->getFile("content_image");
       if ($postImage->isValid() && $postImage->getSize() > 0) {
           $newName = $postImage->getRandomName();
           $postImage->move("public/content_images/", $newName);
           $postData->content_image = $newName;
       }
   
       // Check if a new background_img is uploaded
       $backImage = $this->request->getFile("background_img");
       if ($backImage->isValid() && $backImage->getSize() > 0) {
           $newName2 = $backImage->getRandomName();
           $backImage->move("public/background_img/", $newName2);
           $postData->background_img = $newName2;
       }
       
        $id = $this->model->protect(false)->insert($postData);

        if($id === false){
            return redirect()->back()->with("errors",
            $this->model->errors())->withInput();
        }
        return redirect()->to("content/$id")->with("message","Content Saved");


      
    }

    public function show($id){
        $pages = $this->pageModel->findAll();
        $content = $this->getContentOr404($id);

        return view("Content/show", ["pages"=> $pages, "content" => $content]);
        

    }

    

    public function delete($id){
        $content = $this->getContentOr404($id);
        //if it is posted yes
        
            $this->model->delete($id);

            return redirect()->to("content/index")->with("message","Page deleted");
    }

    public function edit($id){
    
        $pages = $this->pageModel->findAll();

        $content = $this->getContentOr404($id);

        return view("Content/edit", ["content"=> $content, "pages"=> $pages]);
    }

    public function update($id) {
        // Find the content in the data by id
        $content = $this->getContentOr404($id);
    
        // Get all fields except file fields
        $data = $this->request->getPost();
        unset($data['content_image']);
        unset($data['background_img']);
    
        // Assign non-file properties at once using fill
      
    
        // Check if a new content_image is uploaded
        $postImage = $this->request->getFile("content_image");
        if ($postImage && $postImage->isValid() && $postImage->getSize() > 0) {
            $newName = $postImage->getRandomName();
            $postImage->move("public/content_images/", $newName);
            $content->content_image = $newName;
        }
    
        // Check if a new background_img is uploaded
        $backImage = $this->request->getFile("background_img");
        if ($backImage && $backImage->isValid() && $backImage->getSize() > 0) {
            $newName2 = $backImage->getRandomName();
            $backImage->move("public/background_img/", $newName2);
            $content->background_img = $newName2;
        }
    
        // Unset unnecessary property
        $content->__unset("_method");
        $content->fill($data);
        // Check if any change made to properties
        if (!$content->hasChanged()) {
            return redirect()->back()->with("message", "Nothing to update...");
        }
       
    
        // Save the content only if there are changes
        if ($this->model->save($content)) {
            return redirect()->to("content/$id")->with("message", "Content Updated.");
        }
    
        // Handle the case where save fails
        return redirect()->back()->with("errors", $this->model->errors())->withInput();
    }
    
    
        

    private function getContentOr404($id): Contents{
        $content = $this->model->find($id);

        if($content === null){
            throw new PageNotFoundException("Content with id $id not found.");
        }
        return $content;
}
}
