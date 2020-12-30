<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('tables', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('purchases')->nullable();
          $table->boolean('civil_services')->nullable();
          $table->boolean('financial_management')->nullable();
          $table->boolean('access_information')->nullable();
          $table->boolean('infrastructure')->nullable();
          $table->boolean('health')->nullable();
          $table->boolean('education')->nullable();
          $table->boolean('energy')->nullable();
          $table->boolean('water')->nullable();
          $table->boolean('watchdogs')->nullable();            
          $table->timestamps();
      });*/

      Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
      });  
      
      /*Schema::create('proposals_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id')
                ->references('id')
                ->on('topics')
                ->onDelete('cascade');
            $table->integer('proposal_id')->unsigned()->nullable();
            $table->foreign('proposal_id')
                  ->references('id')
                  ->on('proposals')
                  ->onDelete('cascade');
            $table->timestamps();
      });*/

      Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix');
            $table->string('order',16)->unique()->nullable();
            $table->string('title')->nullable();
            $table->string('province_id')->nullable();
            $table->string('municipalities')->nullable();
            $table->string('address')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')
                  ->references('id')
                  ->on('admins')
                  ->onDelete('cascade');
            $table->integer('institution_id')->unsigned()->nullable();
            $table->foreign('institution_id')
                  ->references('id')
                  ->on('institutions')
                  ->onDelete('cascade');   
            /*$table->integer('proposal_topic_id')->unsigned()->nullable();
            $table->foreign('proposal_topic_id')
                  ->references('id')
                  ->on('proposals_topics')
                  ->onDelete('cascade');*/     
            $table->string('status');
            $table->timestamps();
      });

      Schema::create('proposals_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id')
                ->references('id')
                ->on('topics')
                ->onDelete('cascade');
            $table->integer('proposal_id')->unsigned()->nullable();
            $table->foreign('proposal_id')
                  ->references('id')
                  ->on('proposals')
                  ->onDelete('cascade');
            $table->timestamps();
      });

      Schema::create('proposal_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proposal_id')->unsigned()->nullable();
            $table->foreign('proposal_id')
                ->references('id')
                ->on('proposals')
                ->onDelete('cascade');
                $table->integer('admin_id')->unsigned()->nullable();
                $table->foreign('admin_id')
                    ->references('id')
                    ->on('admins')
                    ->onDelete('cascade');
            $table->string('comments')->nullable();
            $table->timestamps();
      });

        //DB::update("ALTER TABLE proposals AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('proposal_comments');
      Schema::dropIfExists('proposals_topics');
      Schema::dropIfExists('proposals'); 
      //Schema::dropIfExists('proposals_topics');     
      Schema::dropIfExists('topics');
    }
}
