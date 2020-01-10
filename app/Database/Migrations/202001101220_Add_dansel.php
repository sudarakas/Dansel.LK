class AddBlog extends \CodeIgniter\Database\Migration {

public function up()
{
        $this->forge->addField([
                'dansel_id'          => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => TRUE,
                        'auto_increment' => TRUE
                ],
                'dansel_title'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '255',
                ],
                'dansel_address'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '1000',
                ],
                'dansel_city'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '100',
                ],
                'dansel_lat'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '50',
                ],
                'dansel_lng'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '50',
                ],
                'dansel_opendate'       => [
                        'type'           => 'DATE
                        'constraint'     => '1000',
                ],
                'blog_description' => [
                        'type'           => 'TEXT',
                        'null'           => TRUE,
                ],
        ]);
        $this->forge->addKey('blog_id', TRUE);
        $this->forge->createTable('blog');
}

public function down()
{
        $this->forge->dropTable('blog');
}
}
