<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("name", 80);
            $table->string("description");
            //the status is going to change to 1 if the task is taken by a user
            $table->integer("status")->default(0);            
            $table->foreignId("company_id")->constrained("companies", "id");
            $table->foreignId("user_id")->nullable()->constrained("users", "id");
            // $table->timestamps();
            $table->string("start_date");
            $table->string("deadline");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
