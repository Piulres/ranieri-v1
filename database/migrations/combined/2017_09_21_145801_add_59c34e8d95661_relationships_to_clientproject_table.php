<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c34e8d95661RelationshipsToClientProjectTable extends Migration
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
            if(Schema::hasColumn('client_projects', 'client_id')) {
                $table->dropForeign('75569_59c34bdeb2332');
                $table->dropIndex('75569_59c34bdeb2332');
                $table->dropColumn('client_id');
            }
            if(Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->dropForeign('75569_59c34bdeba23b');
                $table->dropIndex('75569_59c34bdeba23b');
                $table->dropColumn('project_status_id');
            }
            
        });
    }
}
