<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c34e8ddb5c3RelationshipsToClientTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_transactions', function(Blueprint $table) {
            if (!Schema::hasColumn('client_transactions', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '75572_59c34bed48c5c')->references('id')->on('client_projects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'transaction_type_id')) {
                $table->integer('transaction_type_id')->unsigned()->nullable();
                $table->foreign('transaction_type_id', '75572_59c34bed5045f')->references('id')->on('client_transaction_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'income_source_id')) {
                $table->integer('income_source_id')->unsigned()->nullable();
                $table->foreign('income_source_id', '75572_59c34bed57b06')->references('id')->on('client_income_sources')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'currency_id')) {
                $table->integer('currency_id')->unsigned()->nullable();
                $table->foreign('currency_id', '75572_59c34bed5f079')->references('id')->on('client_currencies')->onDelete('cascade');
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
        Schema::table('client_transactions', function(Blueprint $table) {
            if(Schema::hasColumn('client_transactions', 'project_id')) {
                $table->dropForeign('75572_59c34bed48c5c');
                $table->dropIndex('75572_59c34bed48c5c');
                $table->dropColumn('project_id');
            }
            if(Schema::hasColumn('client_transactions', 'transaction_type_id')) {
                $table->dropForeign('75572_59c34bed5045f');
                $table->dropIndex('75572_59c34bed5045f');
                $table->dropColumn('transaction_type_id');
            }
            if(Schema::hasColumn('client_transactions', 'income_source_id')) {
                $table->dropForeign('75572_59c34bed57b06');
                $table->dropIndex('75572_59c34bed57b06');
                $table->dropColumn('income_source_id');
            }
            if(Schema::hasColumn('client_transactions', 'currency_id')) {
                $table->dropForeign('75572_59c34bed5f079');
                $table->dropIndex('75572_59c34bed5f079');
                $table->dropColumn('currency_id');
            }
            
        });
    }
}
