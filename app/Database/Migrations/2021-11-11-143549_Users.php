<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'invoice'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'username_admin'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_cust'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '13',
            ],
            'alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'jenis_layanan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'kuantitas' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'berat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ]
        ]);
        $this->forge->addPrimaryKey('invoice');
        $this->forge->createTable('datacust');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('datacust');
    }
}
