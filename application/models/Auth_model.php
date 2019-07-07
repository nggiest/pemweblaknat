<?php
class Auth_model extends CI_model{

    function validate($email, $pass){
       $this->db->select('email', 'password', 'role');
       $this->db->from('member');
       $this->db->where('email', $email);
       $this->db->where('password', $pass);
       $this->db->limit(1);
       
       $query = $this->db->get();
       if($query->num_rows()==1){
           return $query->result();
       }
       else{
           return false;
       }
    }
}
?>