<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'articles';

    /**
     * Run the migrations.
     * @table articles
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idArticle');
            $table->string('titre', 45);
            $table->string('contenu', 45);
            $table->string('nom', 45);
            $table->string('prenom', 45);
            $table->string('tag', 45);
            $table->string('date', 45);
            $table->string('comments', 45);
           // $table->unsignedInteger('categories_idcategories');
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
