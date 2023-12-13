<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategoryToSection extends Migration
{
    public function up()
    {
        $this->forge->addColumn("section", [
            "category" => [
                "type"=> "VARCHAR",
                "null" => true,
                "constraint" => 128
        ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn("section","category");
    }
}
