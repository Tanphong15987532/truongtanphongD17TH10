<?php
   
    class Users{
        
        public function checkAccont($c_userName,$c_passWord){
            $m_dsTheoId = new m_users();
            $check = $m_dsTheoId->checkAccountDB($c_userName,$c_passWord);
            if (!$check)
            {
                return false;
            }else{
                 return true;
            }
        }
        public function getTenUser($c_userName,$c_passWord){
            $m_dsTheoId = new m_users();
            $check = $m_dsTheoId->checkAccountDB($c_userName,$c_passWord);
            foreach($check as $item)
            {
                $tenUser=$item['ten_kh'];
            }
            return $tenUser;
        }

        public function getIdUser($c_userName,$c_passWord){
            $m_dsTheoId = new m_users();
            $check = $m_dsTheoId->checkAccountDB($c_userName,$c_passWord);
            foreach($check as $item)
            {
                $idUser=$item['id_user'];
            }
            return $idUser;
        }

        public function insertNewUserKhachHang($idUser,$ho,$ten,$email,$phone,$diachi,$userName,$passWord){
            $insert = new m_users();
            $insert->insertUser($idUser,$ho,$ten,$email,$phone,$diachi,$userName,$passWord);
            
        }
        public function demUser($loaiUser='kh%'){
            $count = new m_users();
            $result=$count->countUser($loaiUser);
            /*foreach($result as $item)
            {
                $soLuong=$item['COUNT(*)'];
            }*/
            return $soLuong=$result[0]['COUNT(*)'];
        }

        public function showUserTheoId($id){
            $user = new m_users();
            $result=$user->showProfile($id);
            return $result;
        }

        public function updateProfile($ho,$ten,$email,$phone,$diachi,$id){
            $insert = new m_users();
            $insert->updateUser($ho,$ten,$email,$phone,$diachi,$id);
        
            
        }

    }

?>