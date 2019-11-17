<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 2:37
 */

class LoginModel extends CI_Model
{
  public function login_user($username, $password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);

    $result = $this->db->get('user');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function register_user($table,$data){
    $insert = $this->db->insert($table, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}