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
