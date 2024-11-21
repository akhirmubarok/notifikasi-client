<?php

class M_notifikasi extends CI_Model
{
    public function getData()
    {
        return $this->db->get('notifikasi')->result_array();
    }
}