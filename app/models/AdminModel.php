<?php 

class  AdminModel extends Helper{

    public function authenticate(array $params) {
        $sql = "SELECT *  FROM admin_tbl WHERE 
        username = ? OR email = ? OR mobile = ?";
        $result = $this->selectOne($sql,[$params['username'],$params['email'],$params['mobile']]);
        if($result){
            if(password_verify($params['password'],$result['password'])){
                $route =  $this->getUserRoleRoute($result['role']);
                return [
                    'status' => "success",
                    'message' => "login success",
                    "QRcode" => $result["gcode"],
                    "OTPcode" => $result["otpcode"],
                    "role" => $result["role"],
                    "permissions" => $result["permissions"],
                    "route" => $route
                ];
            }else{
                return [
                    'status' => "failed",
                    'message' => "invalid password",
                ];
            }
        }else{
            return [
                'status' => "failed",
                'message' => "invalid username",
            ];
        }
    }

    public function checkIfUserExist(string $userId) : bool {
        return true;
    }

    public function getUserRoleRoute(string $role){
        $sql = "SELECT routes FROM permissions_tbl WHERE role = ?";
        return $this->selectOne($sql,[$role])['routes'];
    }

    public function checkPermission(string $userId) : bool {

        return true;
    }

}