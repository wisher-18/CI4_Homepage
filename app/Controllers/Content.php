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
   
    public function index($pageId = null)
    {


        // Fetch all pages
        $pages = $this->pageModel->findAll();
    
        // Check if a specific page ID is provided
        if ($pageId) {
            // Retrieve the page details
            $page = $this->pageModel->find($pageId);
    
            if (!$page) {
                // Handle case when the page is not found (e.g., show an error page)
                return view('errors/html/error_404');
            }


    
            // Fetch content related to the specific page
            $content = $this->model->where('pages_id', $pageId)->paginate(10);
        } else {
            // If no specific page ID is provided, fetch all content
            $content = $this->model->paginate(10);
        }
    
        return view("Content/index", [
            "contents" => $content,
            "pages" => $pages,
            "pager" => $this->model->pager,
            "currentPage" => $pageId, // Pass the current page ID to the view
        ]);
    }
    
    
    public function new(){

        $pages = $this->pageModel->findAll();

        return view("Content/newContent", ["pages" => $pages,
            "content" => new Content(), 
           
        ]);
    }
    public function newHero($id) {
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);
   
    
        return view("Content/newHeroForm", ["pages" => $pages, "paging" => $page]);
    }

    public function newAbout($id) {
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);
   
    
        return view("Content/newAboutForm", ["pages" => $pages, "paging" => $page]);
    }
    
    
    
    public function newOther($id){

        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newOtherForm", ["pages" => $pages, "paging" => $page
            
           
        ]);
    }
    public function newFeature($id){

        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newFeatureForm", ["pages" => $pages, "paging" => $page
            
           
        ]);
    }

    public function newInfo($id){

        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newInfoForm", ["pages" => $pages, "paging" => $page
            
           
        ]);
    }

    public function newPricing($id){
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newPricingForm", ["pages" => $pages, "paging" => $page
            
           
        ]);


    }

    public function newWhyUs($id){
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newWhyUsForm", ["pages" => $pages, "paging" => $page]);


    }
    public function newTestimonial($id){
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newTestimonialsForm", ["pages" => $pages, "paging" => $page]);
    }

    public function newContactUs($id){
        $pages = $this->pageModel->findAll();
        $page = $this->pageModel->find($id);

        return view("Content/newContactUsForm", ["pages" => $pages, "paging" => $page]);
    }




    public function create(){
        $postData = new Contents($this->request->getPost());
       // Check if a new content_image is uploaded
       
       $postImage = $this->request->getFile("content_image");
       if($postImage){
        if ($postImage->isValid() && $postImage->getSize() > 0) {
            $newName = $postImage->getRandomName();
            $postImage->move("public/content_images/", $newName);
            $postData->content_image = $newName;
        }

       }

   
       // Check if a new background_img is uploaded
       $backImage = $this->request->getFile("background_img");
       if($backImage){
        if ($backImage->isValid() && $backImage->getSize() > 0) {
            $newName2 = $backImage->getRandomName();
            $backImage->move("public/background_img/", $newName2);
            $postData->background_img = $newName2;
        }

       }

       
        $id = $this->model->protect(false)->insert($postData);

        if($id === false){
            return redirect()->back()->with("errors",
            $this->model->errors())->withInput();
        }
        return redirect()->to("content/$id")->with("message","Content Saved");


      
    }
    public function createFeature(){
        $postData = new Contents($this->request->getPost());

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

    public function createPricing(){
        $postData = new Contents($this->request->getPost());

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

            return redirect()->back()->with("message","Content deleted");
    }

    public function edit($id){
    
        $pages = $this->pageModel->findAll();

        $content = $this->getContentOr404($id);
        if($content->content_section === "hero"){
            return view("Content/editHeroForm", ["content"=> $content, "pages"=> $pages]);
        }

        if($content->content_section === "features"){
            return view("Content/editFeatureForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "info_section"){
            return view("Content/editInfoForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "other_section"){
            return view("Content/editOtherForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "pricing_section"){
            return view("Content/editPricingForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "testimonial_section"){
            return view("Content/editTestimonialForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "why_us_section"){
            return view("Content/editWhyUsForm", ["content"=> $content, "pages"=> $pages]);
        }
        if($content->content_section === "contact_us_section"){
            return view("Content/editContactForm", ["content"=> $content, "pages"=> $pages]);
        }


        return view("Content/edit", ["content"=> $content, "pages"=> $pages]);
    }


    public function update($id)
    {
        // Find the content in the data by id
        $content = $this->getContentOr404($id);

        $originalContent = clone $content;
    
        // Get all fields except file fields
        $data = $this->request->getPost();
        unset($data['content_image']);
        unset($data['background_img']);
    
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
            if(!$content->hasChanged()) {
                return redirect()->to("content/$id")->with("message", "Nothing to update...");
            }else{
                $this->model->save($content);
                return redirect()->to("content/$id")->with("message", "Content Updated.");
            }

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
