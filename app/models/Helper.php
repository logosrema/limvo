<?php 

class Helper {

    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function Executequery($sql,$params = []) {
        $req = $this->database->openLink()->prepare($sql);
        $req->execute($params);
        $this->database->closeLink();
        return $req;
    }

    public function selectAll($sql,$params = []) {
        $req = $this->Executequery($sql,$params);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectOne($sql,$params = []) {
        $req = $this->Executequery($sql,$params);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($sql,$params = []) {
        $req = $this->Executequery($sql,$params);
        return $req->rowCount();
    }

    public function update($sql,$params = []) {
        $req = $this->Executequery($sql,$params);
        return $req->rowCount();
    }

    public function delete($sql,$params = []) {
        $req = $this->Executequery($sql,$params);
        return $req->rowCount();
    }

    // ----------------------------------------------------orm

    //medoo helper functions
    // public function medooGetAll($table, $where = []) {
    //     return $this->instance()->select($table, '*', $where);
    // }

    // public function medooGetOne($table, $where = []) {
    //     return $this->instance()->get($table, '*', $where);
    // }

    // public function medooInsert($table, $data) {
    //     return $this->instance()->insert($table, $data);
    // }

    // public function medooUpdate($table, $data, $where = []) {
    //     return $this->instance()->update($table, $data, $where);
    // }

    // public function medooDelete($table, $where = []) {
    //     return $this->instance()->delete($table, $where);
    // }

}


