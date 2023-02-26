<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migracja jest dodawana przy pomocy polecenia w konsoli:
 * php artisan make:migration edit_column_content_to_posts_table
 * 
 * Dla tej funkcji trzeba doinstalować przy pomocy composera 'doctrine/dbal'
 */

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        *Schema::table('posts', function (Blueprint $table) {
        *    $table->renameColumn('content','post_content');
        *});
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /**
        *Schema::table('posts', function (Blueprint $table) {
        *    $table->renameColumn('post_content','content');
        *}); 
        */
    }
};
