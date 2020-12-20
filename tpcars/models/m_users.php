<?php
include_once("../models/database.php");
class m_users extends database{
 
  function checkAccountDB($m_userName,$m_passWord){
    $database = new database();
    $chuoisql = "SELECT users.id_user,users.tai_khoan,users.mat_khau,users.ten_kh FROM `users` WHERE tai_khoan=? AND mat_khau=? ";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($m_userName,$m_passWord));
  }

  function showProfile($id_user){
    $database = new database();
    $chuoisql = "SELECT ho_kh,ten_kh,email,phone,dia_chi FROM `users` WHERE id_user = ? ";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($id_user));
  }

  function countUser($loaiUser){
    $database = new database();
    $chuoisql = "SELECT COUNT(*) FROM `users` WHERE id_user LIKE ?";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($loaiUser));
  }

  function insertUser($idUser,$ho,$ten,$email,$phone,$diachi,$userName,$passWord){
    $database = new database();
    $chuoisql = "INSERT INTO `users` (`id_user`, `ho_kh`, `ten_kh`, `email`, `phone`, `dia_chi`, `tai_khoan`, `mat_khau`) VALUES (?,?,?,?,?,?,?,?)";
    $database->setQuery($chuoisql);
    $database->execute(array($idUser,$ho,$ten,$email,$phone,$diachi,$userName,$passWord)); 
  }
  function updateUser($ho,$ten,$email,$phone,$diachi,$id){
    $database = new database();
    $chuoisql = "UPDATE `users` SET `ho_kh` = ?, `ten_kh` = ?, `email` = ?, `phone` = ?, `dia_chi` = ? WHERE `users`.`id_user` = ?";
    $database->setQuery($chuoisql);
    $database->execute(array($ho,$ten,$email,$phone,$diachi,$id)); 
  }
}
?>