<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table            = 'content';
    protected $primaryKey       = 'content_id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\Contents::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $feature_data;
    protected $allowedFields    = ["content_title","content_sub_heading",
        "content","content_image","content_section","additional_content",
        "primary_btn","primary_btn_name","primary_btn_url","secondary_btn","secondary_btn_name","secondary_btn_url","background_img","pages_id","feature_data", "feature_count"];

        public function getHeroContent()
        {
            return $this->where('content_section', 'hero')->findAll();
        }

        public function getFeatureContent(){
            return $this->where('content_section', 'features')->findAll();
        }

        public function getOtherSectionContent(){
            return $this->where("content_section", "other_section")->findAll();
        }
        public function getInfoSectionContent(){
            return $this->where("content_section", "info_section")->findAll();
        }
        public function getPricingSectionContent(){
            return $this->where("content_section", "pricing_section")
            ->where("pages_id", "15")
            ->findAll();
        }

        public function getWhyUsSectionContent(){
            return $this->where("content_section", "why_us_section")
            ->where("pages_id", "15")
            ->findAll();
        
        }
        public function getAboutUsContent(){
            return $this->where("content_section", "about_section")
            ->where("pages_id" , "15")
            ->findAll();
        }
        public function getTestimonialContent(){
            return $this->where("content_section", "testimonial_section")
            ->where("pages_id" , "15")
            ->findAll();
        }
        public function getContactUsContent(){
             return $this->where("content_section", "contact_us_section")
            ->where("pages_id" , "15")
            ->findAll();
        }


        public function getAllContentByPage($page_id){
            return $this->where("pages_id", $page_id)
            ->findAll();
        }

        public function getHeroByPage($page_id){
            return $this->where("content_section", "hero")
            ->where("pages_id", $page_id)
            ->findAll();
        }

        
        public function getFeaturesByPage($page_id){
            return $this->where("content_section", "features")
            ->where("pages_id", $page_id)
            ->findAll();
        }

        public function getOtherByPage($page_id){
            return $this->where("content_section", "other_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }

        public function getInfoByPage($page_id){
            return $this->where("content_section", "info_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }

        public function getPricingByPage($page_id){
            return $this->where("content_section", "pricing_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }
        public function getWhyUsByPage($page_id){
            return $this->where("content_section", "why_us_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }
        public function getAboutusByPage($page_id){
            return $this->where("content_section", "about_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }
        public function getTestimonialByPage($page_id){
            return $this->where("content_section", "testimonial_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }

        public function getContactUsByPage($page_id){
            return $this->where("content_section", "contact_us_section")
            ->where("pages_id", $page_id)
            ->findAll();
        }
        
    
        // Dates
    
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
