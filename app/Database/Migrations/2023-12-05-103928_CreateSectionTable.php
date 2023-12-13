<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSectionTable extends Migration
{
    public function up()
    {
        $this->forge->addField(["id"=>[
            "type"=> "INT",
            "null" => false,
            "auto_increment" => true
        ],
        "title"=> [
            "type"=> "VARCHAR",
            "constraint"=> 168,
            "null"=> false
        ],
        "sub_title" => [
            "type"=> "VARCHAR",
            "constraint" => 168,
            "null"=> false
        ],
        "content" => [
            "type"=> "TEXT",
            "constraint" => 255,
            null => false
        ],
        "image" => [
            "type" => "VARCHAR",
            "constraint" => 168,
            "null"=> true
        ]
    ]);
    $this->forge->addPrimaryKey("id");
    $this->forge->createTable("section");
    }

    public function down()
    {
        $this->forge->dropTable("section");
    }
}
