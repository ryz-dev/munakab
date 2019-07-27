<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Database\Types\Type;

class UpdatedPengumumanTableWithVoyager07273e4780e4 extends Migration
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
        // upHash=18c71f0b312a0536317d303bf9da2437
        DatabaseUpdater::update(
            [
              "name" => "pengumuman",
              "oldName" => "pengumuman",
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
                  "name" => "title",
                  "type" => [
                    "name" => "varchar",
                    "category" => "Strings",
                    ],
                  "default" => null,
                  "notnull" => "1",
                  "length" => "255",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "title",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "2" => [
                  "name" => "description",
                  "type" => [
                    "name" => "longtext",
                    "category" => "Strings",
                    "notSupportIndex" => "1",
                    "default" => [
                      "disabled" => "1",
                      ],
                    ],
                  "default" => null,
                  "notnull" => "",
                  "length" => "0",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
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
                  "length" => "255",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "image",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "4" => [
                  "name" => "user_id",
                  "oldName" => "",
                  "type" => [
                    "name" => "integer",
                    "category" => "Numbers",
                    "default" => [
                      "type" => "number",
                      "step" => "any",
                      ],
                    ],
                  "length" => null,
                  "fixed" => "",
                  "unsigned" => "1",
                  "autoincrement" => "",
                  "notnull" => "",
                  "default" => null,
                  ],
                "5" => [
                  "name" => "created_at",
                  "oldName" => "",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
                    ],
                  "length" => null,
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "notnull" => "",
                  "default" => null,
                  ],
                "6" => [
                  "name" => "updated_at",
                  "oldName" => "",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
                    ],
                  "length" => null,
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "notnull" => "",
                  "default" => null,
                  ],
                ],
              "indexes" => [
                "0" => [
                  "name" => "PRIMARY",
                  "oldName" => "PRIMARY",
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
                    "lengths" => [
                      "0" => null,
                      ],
                    ],
                  "table" => "pengumuman",
                  ],
                ],
              "primaryKeyName" => "primary",
              "foreignKeys" => [
                ],
              "options" => [
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

        