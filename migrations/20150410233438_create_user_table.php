<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{

    public function change()
    {
        $users = $this->table('users');
        $users->addColumn('name', 'string', array('limit' => 40))
            ->addColumn('email', 'string', array('limit' => 40))
            ->addColumn('password', 'string', array('limit' => 400))
            ->addColumn('created', 'datetime')
            ->create();
    }

    
    /**
     * Migrate Up.
     */
    public function up()
    {
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}