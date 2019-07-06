<?php

class Model_member extends CI_Model {
    function get_member()
    {
        $data = $this->db->query("SELECT * FROM member");
        return $data->result_array();
    }

    function insert_member($data_member)
    {
        $this->db->insert('member', $data_member);
    }

    function getid_member($id_member){
        $data = $this->db->query("SELECT * FROM member WHERE member.id_member = $id_member");
        return $dat->row();
    }

}
?>