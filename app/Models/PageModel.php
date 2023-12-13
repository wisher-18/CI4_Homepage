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
    protected $allowedFields    = ["page_title"];

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
