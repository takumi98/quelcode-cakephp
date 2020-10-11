<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class PeopleTable extends Table {

  public function initialize(array $config) {
    parent::initialize($config);

    $this->setTable('people');
    $this->setDisplayField('name');
    // setDisplayFieldは find('list')で取り出す項目を指定している。
    $this->setPrimaryKey('id');
  }
}
