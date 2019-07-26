<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Database\Types\Type;

class CreatedSliderTableWithVoyager072647aceb65 extends Migration
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
        // upHash=dbdf5af92e757dca2640e17c0ef035e0
        SchemaManager::createTable(
            [
              "name" => "slider",
              "oldName" => "slider",
              "columns" => [
                "0" => [
                  "name" => "id",
                  "type" => [
                    "name" => "integer",
                    "category" => "Numbers",
                    "default" => [
                      "type" => "number",
                      "step" => "any",
                      ],
                    ],
                  "default" => null,
                  "notnull" => "1",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "1",
                  "autoincrement" => "1",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "id",
                  "null" => "NO",
                  "extra" => "auto_increment",
                  "composite" => "",
                  ],
                "1" => [
                  "name" => "user_id",
                  "type" => [
                    "name" => "integer",
                    "category" => "Numbers",
                    "default" => [
                      "type" => "number",
                      "step" => "any",
                      ],
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "1",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "user_id",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "2" => [
                  "name" => "description",
                  "type" => [
                    "name" => "text",
                    "category" => "Strings",
                    "notSupportIndex" => "1",
                    "default" => [
                      "disabled" => "1",
                      ],
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "description",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "3" => [
                  "name" => "image",
                  "type" => [
                    "name" => "varchar",
                    "category" => "Strings",
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "image",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "4" => [
                  "name" => "created_at",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "created_at",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "5" => [
                  "name" => "updated_at",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => null,
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "updated_at",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                ],
              "indexes" => [
                "0" => [
                  "name" => "primary",
                  "oldName" => "primary",
                  "columns" => [
                    "0" => "id",
                    ],
                  "type" => "PRIMARY",
                  "isPrimary" => "1",
                  "isUnique" => "1",
                  "isComposite" => "",
                  "flags" => [
                    ],
                  "options" => [
                    ],
                  "table" => "slider",
                  ],
                ],
              "primaryKeyName" => "primary",
              "foreignKeys" => [
                ],
              "options" => [
                "collate" => "utf8mb4_unicode_ci",
                "charset" => "utf8mb4",
                ],
              ]
        );
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

        