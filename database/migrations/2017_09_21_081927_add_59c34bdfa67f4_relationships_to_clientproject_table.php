<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c34bdfa67f4RelationshipsToClientProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_projects', function(Blueprint $table) {
            if (!Schema::hasColumn('client_projects', 'client_id')) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', '75569_59c34bdeb2332')->references('id')->on('clients')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->integer('project_status_id')->unsigned()->nullable();
                $table->foreign('project_status_id', '75569_59c34bdeba23b')->references('id')->on('client_project_statuses')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_projects', function(Blueprint $table) {
            
        });
    }
}
