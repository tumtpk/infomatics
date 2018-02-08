<?php

    class model extends CI_Model {


        public function test(){
            $this->load->database();
            $sql = "SELECT * FROM demo";
            $query = $this->db->query($sql);
            return $query;
        }

    }

?>
