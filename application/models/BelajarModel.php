<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 3:02
 */

class BelajarModel extends CI_Model
{
  public function input_data_mahasiswa($table,$data){
    $insert = $this->db->insert($table, $data);

    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_mahasiswa($table){
    $hasil = $this->db->get($table);
    return $hasil->result_array();
  }

  public function delete_mahasiswa($table,$nim){
    $this->db->where('nim', $nim);
    $delete = $this->db->delete($table);

    if ($delete){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_mahasiswa_nim($table,$nim){
    $this->db->where('nim',$nim);
    $hasil = $this->db->get($table);

    return $hasil->row_array();
  }

  public function update_mahasiswa($table,$nim,$data){
    $this->db->where('nim', $nim);
    $update = $this->db->update($table,$data);

    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}