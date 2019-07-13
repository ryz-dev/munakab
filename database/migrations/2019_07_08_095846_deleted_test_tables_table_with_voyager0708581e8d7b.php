<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Database\Types\Type;

class DeletedTestTablesTableWithVoyager0708581e8d7b extends Migration
{
    public function __construct()
    {
        Type::registerCustomPlatformTypes();
    }
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Generated only to work with Voyager
        // upHash=2c510137cb28e0403a37a0d2f616be70
        Schema::dropIfExists('TestTables');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

        