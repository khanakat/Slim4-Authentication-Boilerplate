<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DataDefinitionLanguage extends Migration
{
    public function up()
    {
        $users_roles = $this->table('users');
        $users_roles->addColumn('user_level', 'integer', ['null' => true])
                    ->addColumn('updated_at', 'timestamp', ['null' => true])           
                    ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])    
                    ->addForeignKey('user_level', 'roles', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                    ->save();
    }
}
