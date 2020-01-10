<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePlaygroundTables extends Migration
{
    /**
     * Database creation is both an art and a science: there are many best practices,
     * but there are also aspects that are left up to develop opinions. This migration
     * file offers a few different philosophies to table definitions - follow the
     * format that fits your style.
     *
     */
    public function up()
    {
        /**
         * Heroes
         *
         * We include all three data fields (created_at, updated_at, deleted_at) so we
         * can use both features of CodeIgniter\Model, $useTimestamps and $useSoftDeletes.
         */
        $fields = [
            'name' => ['type' => 'varchar', 'constraint' => 255],
            'address' => ['type' => 'varchar', 'constraint' => 255],
            'city' => ['type' => 'varchar', 'constraint' => 50],
            'location_lat' => ['type' => 'varchar', 'constraint' => 50],
            'location_lng' => ['type' => 'varchar', 'constraint' => 50],
            'opening_date' => ['type' => 'date'],
            'poya_date' => ['type' => 'int'],
            'opening_time' => ['type' => 'time'],
            'end_time' => ['type' => 'time'],
            'time' => ['type' => 'int', 'constraint' => 50],
            'category' => ['type' => 'varchar', 'constraint' => 50],
            'description' => ['type' => 'text'],
            'organizing_team' => ['type' => 'varchar', 'constraint' => 150],
            'organizing_number' => ['type' => 'varchar', 'constraint' => 15],
            'image' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
        ];

        // 'id' is a buzzword that indicates to addField() that this will be a primary key
        // We could also have provided this in $fields, as we do below
        $this->forge->addField('id');
        $this->forge->addField($fields);
        // Keys help optimize database performance; we'll add some for fields we are likely
        // to search or filter by
        $this->forge->addKey('name');
        $this->forge->addKey('created_at');

        // While not necessary, indexing against `deleted_at` is a good idea if your model
        // is using soft deletes, since most SELECT statements will include `deleted_at`

        $this->forge->createTable('dansels');

    }
    public function down()
    {
        $this->forge->dropTable('dansels');
    }
}
