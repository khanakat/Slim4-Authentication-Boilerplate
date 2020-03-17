<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration
{
    public function up()
    {        
        $table = $this->table('roles');
        $table->addColumn('name', 'string', ['limit' => 100])
                ->addColumn('updated_at', 'timestamp', ['null' => true])           
                ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])   
                ->create();
                     
        //Default DML
        $rows = [
            ['name'  => 'Administrator'],
            ['name'  => 'Moderator'],
            ['name'  => 'Guest']
        ];
        $this->table('roles')->insert($rows)->save();        
    }

    public function down()
    {   
        $this->schema->drop('roles');
    }
}
