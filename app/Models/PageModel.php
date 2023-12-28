<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table            = 'pages';
    protected $primaryKey       = 'page_id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\Page::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["page_title", "slug"];

    public function slug($string){
        helper("url");
        $slug = url_title($string, "-", true);
        return $slug;
    }

    public function findBySlug($slug)
    {
       
        return $this->where('slug', $slug)->first();
    }

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        "page_title" => "required|max_length[128]"
    ];
    protected $validationMessages   = [
        "page_title" => [
            "required" => "Please enter a title.",
            "max_length" => "{param} maximum characters for the {field}."
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

   
}
