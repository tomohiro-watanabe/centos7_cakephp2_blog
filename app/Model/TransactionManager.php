<?php
App::uses('AppModel', 'Model');
class TransactionManager extends AppModel {
    public $useTable = false;
    public function begin(){
        $dataSource = $this->getDataSource();
        $dataSource->begin($this);
        return $dataSource;
    }
    public function commit($_dataSource){
        $_dataSource->commit();
    }
    public function rollback($_dataSource){
        $_dataSource->rollback();
    }
}
