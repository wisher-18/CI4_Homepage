<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\PageModel;
use App\Models\SectionModel;
use App\Entities\Section;
use RuntimeException;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    private ContentModel $contentModel;
    
    public function __construct()
        {
           
        }

    public function index()
    {
        $contentModel = new ContentModel();
        $pageModel = new PageModel;
            $pages = $pageModel->findAll();

            $heroContent = $contentModel->getHeroContent();
            $otherSection = $contentModel->getOtherSectionContent();
            $featureContent = $contentModel->getFeatureContent();
            $infoContents = $contentModel->getInfoSectionContent();
            $pricingContents = $contentModel->getPricingSectionContent();
            $whyUsContents = $contentModel->getWhyUsSectionContent();
        return view('Home/index',["pages" => $pages, "heroContents" => $heroContent, "otherSections" => $otherSection,
        "featureContent" => $featureContent, "infoContents" => $infoContents, "pricingContents" => $pricingContents,
        "whyUsContents" => $whyUsContents]);
    }
    public function features(){
        $pageModel = new PageModel;
        $pages = $pageModel->findAll();
        return view('Features/features', ["pages" => $pages]);
    }
    public function about(){
        $pageModel = new PageModel;
        $pages = $pageModel->findAll();
        return view('About/about', ["pages" => $pages]);
    }
    public function contact(){
        $pageModel = new PageModel;
        $pages = $pageModel->findAll();
        return view('Contact/contact',["pages" => $pages]);
    }
    public function testimonials(){
        $pageModel = new PageModel;
        $pages = $pageModel->findAll();
        return view('Testimonials/testimonials',["pages" => $pages]);
    }
    public function pricing(){
        $pageModel = new PageModel;
        $pages = $pageModel->findAll();
        return view('Pricing/pricing',["pages" => $pages]);
    }

   

    //To create data
    // public function create(){
        // $postData = new Section($this->request->getPost());
        // $postImage = $this->request->getFile("section_image");
        // $newName = $postImage->getRandomName();
        // $postImage->move("public/section_images/", $newName);
        // $postData->section_image = $newName;
        // $id = $this->model->protect(false)->insert($postData);

        // if($id === false){
        //     return redirect()->back()->with("errors",
        //     $this->model->errors())->withInput();
        // }
        // return redirect()->to("section/$id")->with("message","Article Saved");


        // if($this->request->getPost()){
        //     $postData = $this->request->getPost();
        //     $postImage = $this->request->getFile("section_image");
        //     $newName = $postImage->getRandomName();
        //     $postImage->move("public/section_images/", $newName);
        //     $postData["section_image"] = $newName;
        //     $this->model->insert($postData);
        //     return redirect()->to("section/new")->with("message", "Article saved.");
           
        // }
        // }
    //}

    // public function show($id){
    //     $section = $this->getSectionOr404($id);

    //     return view("Home/showSection", ["section" => $section]);

    // }

    // public function getSectionPosts()
    // {
    //     $category = 'section'; // Replace 'your_category' with the actual category value
    //     $categoryItems = $this->model->getCategoryItems($category);

    //     // Now $categoryItems contains an array of items with the specified category
    //     // You can pass $categoryItems to your view or do further processing as needed

    //     return view('your_view', ['categoryItems' => $categoryItems]);
    // }


    // private function getSectionOr404($id): Section{
    //     $section = $this->model->find($id);

    //     if($section === null){
    //         throw new PageNotFoundException("Article with id $id not found.");
    //     }
    //     return $section;
 }

