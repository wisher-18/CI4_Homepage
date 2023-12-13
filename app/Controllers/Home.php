<?php

namespace App\Controllers;
use App\Models\SectionModel;
use App\Entities\Section;
use RuntimeException;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    
    public function __construct()
        {
            
        }

    public function index()
    {
       
       
        return view('Home/index', []);
    }
    public function about(){
        return view('About/about');
    }
    public function contact(){
        return view('Contact/contact');
    }
    public function testimonials(){
        return view('Testimonials/testimonials');
    }
    public function pricing(){
        return view('Pricing/pricing');
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

