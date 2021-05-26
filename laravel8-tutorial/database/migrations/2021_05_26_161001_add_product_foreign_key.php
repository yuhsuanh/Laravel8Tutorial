<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('stock')
                ->comment('The product type id');

            $table->foreign('type_id')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //if type_id exists in products table, then delete it
        if (Schema::hasColumn('products', 'type_id')) {
            Schema::table('products', function (Blueprint $table) {
                //drop foreign key
                $table->dropConstrainedForeignId('type_id');

                $table->dropColumn('type_id');
            });
        }
    }
}
