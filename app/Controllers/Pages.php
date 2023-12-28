<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContentModel;
use App\Models\PageModel;
use App\Entities\Page;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    private PageModel $model;
    private ContentModel $contentModel;
    public function __construct()
    {
        $this->model = new PageModel();
        $this->contentModel = new ContentModel();
    }
    public function index()
    {
        
    }
    public function new(){
            
        return view("Pages/newPage", [
            "pages" => new Page
        ]);
    }

    public function create()
    {
        $page = $this->request->getPost("page_title");
        $slug = $this->model->slug($page);
        $data = [
            'page_title' => $page,
            'slug'       => $slug
        ];
    
        $id = $this->model->insert($data);
    
        if ($id) {
            return redirect()->to("page/show")->with("message", "Page added.");
        }
    
        return redirect()->back()->with("errors", $this->model->errors());
    }

    public function showSlug($slug){
     
        $pages = $this->model->findAll(); 
        $page = $this->model->findBySlug($slug);
        if ($page && is_object($page)) {
            $heroContent = $this->contentModel->getHeroByPage($page->page_id);
            $otherSection = $this->contentModel->getOtherByPage($page->page_id);
            $featureContent = $this->contentModel->getFeaturesByPage($page->page_id);
            $infoContents = $this->contentModel->getInfoByPage($page->page_id);
            $pricingContents = $this->contentModel->getPricingByPage($page->page_id);
       
       
        } else {
            $sectionAs = [];
            $sectionBs = [];
            $sectionCs = [];
            $sectionDs = [];
            $sectionEs = [];
            $sectionFs = [];
        }
        if($pages == $page){
            $this->contentModel->findAll();
        }
        return view("pages/slugs", ['pages'=>$pages,'page'=>$page, "heroContents" => $heroContent, "otherSections" => $otherSection,
        "featureContent" => $featureContent, "infoContents" => $infoContents, "pricingContents" => $pricingContents]);
       }

    public function show(){
        // $pages = $this->getPageOr404($id);
        $pages = $this->model->findAll();
        return view("Pages/index", ["pages"=> $pages]);

    }



    public function confirmDelete($id){
        $page = $this->getPageOr404($id);

        return view("Pages/delete", ["pages"=> $page]);
    }

    public function delete($id){
        $page = $this->getPageOr404($id);
        //if it is posted yes
        
            $this->model->delete($id);

            return redirect()->to("page/show")->with("message","Page deleted");
    }

    public function edit($id){
    

        $page = $this->getPageOr404($id);

        return view("Pages/edit", ["pages"=> $page]);
    }

    public function update($id)
    {
        // Find the page in the data by id
        $page = $this->getPageOr404($id);
    
        // Get the new page title
        $pageTitle = $this->request->getPost('page_title');
    
        // Generate a slug based on the new page title
        $slug = $this->model->slug($pageTitle);
    
        // Check if any changes are made
        if ($page->page_title === $pageTitle && $page->slug === $slug) {
            // No changes, redirect with a message
            return redirect()->back()->with("message", "Nothing to update...");
        }
    
        // Update the page data
        $data = [
            'page_title' => $pageTitle,
            'slug'       => $slug
        ];
    
        $this->model->update($id, $data);
    
        // Check if any rows were affected
        if ($this->model->affectedRows() > 0) {
            // Rows affected, redirect with a success message
            return redirect()->to("page/show")->with("message", "Page Updated.");
        } else {
            // No rows affected, redirect with a message
            return redirect()->back()->with("message", "Nothing to update...");
        }
    }
    

    private function getPageOr404($id): Page{
        $page = $this->model->find($id);

        if($page === null){
            throw new PageNotFoundException("Page with id $id not found.");
        }
        return $page;
}

}