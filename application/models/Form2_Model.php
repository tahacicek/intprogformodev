<?php

class Form2_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* Bu model için kullanılacak tablonun ismi tanımlanır. */
    public $tableName = "form2";

    public function insert($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }


    public function get_all(){
        return $this->db->get($this->tableName)->result();
    }
}
