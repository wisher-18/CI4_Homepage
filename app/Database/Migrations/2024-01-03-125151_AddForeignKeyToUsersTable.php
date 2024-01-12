<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeyToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn("users",[
            "user_role"=>[
                "type" => "VARCHAR",
                "null" => false,
                "constraint" => 255
            ]
        ]);

    }

    public function down()
    {
        $this->forge->dropColumn("users", "user_role");
    }
}
