<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Database\Types\Type;

class UpdatedOpdTableWithVoyager0711ec29c2ef extends Migration
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
        // upHash=f5981aee393ecbc798abde78105e48a0
        DatabaseUpdater::update(
            [
              "name" => "opd",
              "oldName" => "opd",
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
                  "name" => "author_id",
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
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "author_id",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "2" => [
                  "name" => "category_id",
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
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "category_id",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "3" => [
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
                "4" => [
                  "name" => "excerpt",
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
                  "length" => "65535",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "excerpt",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "5" => [
                  "name" => "welcome_message",
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
                  "length" => "65535",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "welcome_message",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "6" => [
                  "name" => "body",
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
                  "length" => "65535",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "body",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "7" => [
                  "name" => "slug",
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
                  "oldName" => "slug",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "8" => [
                  "name" => "meta_description",
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
                  "length" => "65535",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "meta_description",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "9" => [
                  "name" => "meta_keywords",
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
                  "oldName" => "meta_keywords",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "10" => [
                  "name" => "status",
                  "type" => [
                    "name" => "smallint",
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
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "status",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "11" => [
                  "name" => "link",
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
                  "length" => "65535",
                  "precision" => "10",
                  "scale" => "0",
                  "fixed" => "",
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "collation" => "utf8mb4_unicode_ci",
                  "oldName" => "link",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "12" => [
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
                "13" => [
                  "name" => "created_at",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
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
                  "oldName" => "created_at",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "14" => [
                  "name" => "updated_at",
                  "type" => [
                    "name" => "timestamp",
                    "category" => "Date and Time",
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
                  "oldName" => "updated_at",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "15" => [
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
                ],
              "indexes" => [
                "0" => [
                  "name" => "opd_slug_unique",
                  "oldName" => "opd_slug_unique",
                  "columns" => [
                    "0" => "slug",
                    ],
                  "type" => "UNIQUE",
                  "isPrimary" => "",
                  "isUnique" => "1",
                  "isComposite" => "",
                  "flags" => [
                    ],
                  "options" => [
                    "lengths" => [
                      "0" => null,
                      ],
                    ],
                  "table" => "opd",
                  ],
                "1" => [
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
                  "table" => "opd",
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

        