<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('address')->nullable();
            $table->text('telephones')->nullable();
            $table->text('emails')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });
        \DB::table('footers')->insert([
            'title' => 'عنوان',
            'description_1' => 'توضیحات',
            'description_2' => 'توضیحات توضیحات',
            'address' => 'آدرس',
            'telephones' => '0123456789,0987654321',
            'emails' => 'mohsen@mail.com,a@b.c',
            'facebook' => 'mk1992',
            'twitter' => 'mk1992',
            'google' => 'mk1992',
            'linkedin' => 'mk1992',
            'instagram' => 'mk1992',
            'telegram' => 'mk1992',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
