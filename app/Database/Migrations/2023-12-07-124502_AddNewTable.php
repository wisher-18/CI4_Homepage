<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewTable extends Migration
{
    public function up()
    {
        $this->forge->addField(["content_id"=>[
            "type"=> "INT",
            "null" => false,
            "auto_increment" => true
        ],
        "content_title"=> [
            "type"=> "VARCHAR",
            "constraint"=> 168,
            "null"=> true
        ],
        "content_sub_heading" => [
            "type"=> "VARCHAR",
            "constraint" => 168,
            "null"=> true
        ],
        "content" => [
            "type"=> "TEXT",
            "constraint" => 255,
            null => true
        ],
        "content_image" => [
            "type" => "VARCHAR",
            "constraint" => 168,
            "null"=> true
        ],
        "content_section"=> [
            "type"=> "VARCHAR",
            "constraint"=> 168,
            null => true
        ],
        "page_id"=> [
            "type"=> "INT",
            "null" => false
        ]
    ]);
    $this->forge->addPrimaryKey("content_id");
    $this->forge->createTable("content");
    }

    public function down()
    {
        $this->forge->dropTable("content");
    }
}
