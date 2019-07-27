<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Database\Types\Type;

class UpdatedStrukturPemerintahanTableWithVoyager0727ff031033 extends Migration
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
        // upHash=aaa6077c3dd175c4aead0412e84e8983
        DatabaseUpdater::update(
            [
              "name" => "struktur_pemerintahan",
              "oldName" => "struktur_pemerintahan",
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
                  "name" => "jabatan",
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
                  "oldName" => "jabatan",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "2" => [
                  "name" => "nama",
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
                  "oldName" => "nama",
                  "null" => "NO",
                  "extra" => "",
                  "composite" => "",
                  ],
                "3" => [
                  "name" => "tempat_lahir",
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
                  "oldName" => "tempat_lahir",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "4" => [
                  "name" => "tanggal_lahir",
                  "type" => [
                    "name" => "date",
                    "category" => "Date and Time",
                    "default" => [
                      "type" => "date",
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
                  "oldName" => "tanggal_lahir",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "5" => [
                  "name" => "agama",
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
                  "oldName" => "agama",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "6" => [
                  "name" => "pendidikan_terakhir",
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
                  "oldName" => "pendidikan_terakhir",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "7" => [
                  "name" => "masa_bakti",
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
                  "oldName" => "masa_bakti",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "8" => [
                  "name" => "alamat_rumah",
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
                  "oldName" => "alamat_rumah",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "9" => [
                  "name" => "alamat_kantor",
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
                  "oldName" => "alamat_kantor",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "10" => [
                  "name" => "telepon",
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
                  "oldName" => "telepon",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "11" => [
                  "name" => "email",
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
                  "oldName" => "email",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "12" => [
                  "name" => "biografi",
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
                  "oldName" => "biografi",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "13" => [
                  "name" => "atasan",
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
                  "oldName" => "atasan",
                  "null" => "YES",
                  "extra" => "",
                  "composite" => "",
                  ],
                "14" => [
                  "name" => "urutan",
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
                  "unsigned" => "",
                  "autoincrement" => "",
                  "columnDefinition" => null,
                  "comment" => null,
                  "oldName" => "urutan",
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
                  "table" => "struktur_pemerintahan",
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

        