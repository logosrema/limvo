<?php 

class AdminController extends AdminModel{ 

    public function authenticate(array $params){
        return parent::authenticate($params);
    }

    // public function checkIfUserExist(string $userId){
    //     return $this->checkIfUserExist($userId);
    // }

}