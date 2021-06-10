<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionIdBestAnswerIdUserIdToAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

            $table->unsignedBigInteger('best_answer_id')->nullable();
            $table->foreign('best_answer_id')->references('id')->on('questions')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(["question_id"]);
            $table->dropColumn(["question_id"]);

            $table->dropForeign(["best_answer_id"]);
            $table->dropColumn(["best_answer_id"]);
            
            $table->dropForeign(["user_id"]);
            $table->dropColumn(["user_id"]);
        });
    }
}
