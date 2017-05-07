<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{

    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('articles', function (Blueprint $collection) {
            $collection->index('title');
            $collection->index('content');
            $collection->index('user_id');
            $collection->timestamps();
            $collection->softDeletes();
//            $collection->timestamp('created_at')->index();
//            $collection->timestamp('updated_at')->index();
//            $collection->timestamp('deleted_at')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->drop('articles');
    }
}
