<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class SectionModel extends Model{
        protected $table = "section";

        // public function getCategoryItems($category)
        // {
        //     return $this->where('category', $category)->findAll();
        // }

        protected $allowed_fields = ["title"];

        protected $returnType = \App\Entities\Section::class;

        // protected $returnType = "\App\Entities\Section::class";

        protected $validationRules = [
            "title" => "required|max_length[128]"
        ];

        //Changing default message of validation.
        protected $validationMessages = [
            "title" => [
                "required" => "Please enter a title.",
                "max_length" => "{param} maximum characters for the {field}."
            ]
            ];
    
    }
?>