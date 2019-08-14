<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            $table->string('applicant_name')->nullable();
            $table->string('applicant_mail')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('contact_telefone')->nullable();
            $table->integer('contact_gsm')->nullable();
            $table->string('intern_extern')->nullable();
            $table->string('institute')->nullable();
            $table->string('event_name');
            $table->date('event_date_start')->nullable();
            $table->date('event_date_end')->nullable();
            $table->timestamp('timing')->nullable();
            $table->string('location')->nullable();
            $table->boolean('status')->default(false);
            $table->integer('participants')->nullable();
            $table->string('catering')->nullable();
            $table->string('catering_name')->nullable();
            $table->string('catering_type')->nullable();
            $table->text("remarks")->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}