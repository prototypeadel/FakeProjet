<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'projets';

    /**
     * Run the migrations.
     * @table projets
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idProjet');
            $table->string('titre', 45);
            $table->string('contenu', 45);
            $table->string('image', 55);
            //$table->unsignedInteger('clients_idclients');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
