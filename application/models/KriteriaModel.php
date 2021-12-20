<?php
    class KriteriaModel extends CI_Model{
        
        public function getC1()
        {
            return $this->db->get('c1')->result_array();
        }

    }
