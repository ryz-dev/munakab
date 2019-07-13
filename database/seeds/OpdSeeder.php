<?php

use Illuminate\Database\Seeder;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu_item = [
            'menu_id' =>1,
            'title' => 'Opd',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-world',
            'color' => 	'#000000',
            'parent_id' => null,
            'order' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'route'	=> 'voyager.opd.index',
            'parameters' => null
        ];

        \DB::table('menu_items')->insert($menu_item);

        $data_types = [
            'name' => 'opd',
            'slug' => 'opd',
            'display_name_singular' => 	'Opd',
            'display_name_plural' => 'Opd',
            'icon' => 'voyager-world',
            'model_name' => 'App\Opd',
            'policy_name' => 'App\Policies\OpdPolicy',
            'controller' => null,
            'description' => null,
            'generate_permission' => 1,
            'server_side' => 0,
            'details' =>'{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
            'created_at' => date('Y-m-d H:is'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $id_data_types = \DB::table('data_types')->insertGetId($data_types);

        $data_rows =
        [
            [
                'data_type_id' => $id_data_types,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'author_id',
                'type' => 'text',
                'display_name' => 'Author Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 2
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'category_id',
                'type' => 'text',
                'display_name' => 'Category Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{}',
                'order' => 3
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'title',
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{}',
                'order' => 4
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'excerpt',
                'type' => 'text_area',
                'display_name' => 'Excerpt',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'welcome_message',
                'type' => 'rich_text_box',
                'display_name' => 'Welcome Message',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'body',
                'type' => 'rich_text_box',
                'display_name' => 'Body',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'slug',
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"title"},"validation":{"rule":"unique:opd,slug"}}',
                'order' => 8
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'meta_description',
                'type' => 'text',
                'display_name' => 'Meta Description',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 1
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'meta_keywords',
                'type' => 'text',
                'display_name' => 'Meta Keywords',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 10
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'status',
                'type' => 'select_dropdown',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}',
                'order' => 11
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'link',
                'type' => 'text',
                'display_name' => 'Link',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 12
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'user_id',
                'type' => 'text',
                'display_name' => 'User Id',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{}',
                'order' => 13
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 14
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 15
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'opd_hasone_category_relationship',
                'type' => 'relationship',
                'display_name' => 'categories',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"TCG\\Voyager\\Models\\Category","table":"categories","type":"belongsTo","column":"category_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 16
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
                'order' => 17
            ],
            [
                'data_type_id' => $id_data_types,
                'field' => 'opd_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => 'Kepala Dinas',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"TCG\\Voyager\\Models\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 18
            ],
        ];
        \DB::table('data_rows')->insert($data_rows);
    }
}
