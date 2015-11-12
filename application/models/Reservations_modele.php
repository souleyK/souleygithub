<?php


class reservations_modele extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_reservation($numclient = 0)
{
        if ($numclient === 0)
        {
                $query = $this->db->get('reservation');
                return $query->result_array();
        }

        $query = $this->db->get_where('reservation', array('idClient' => $numclient));
        return $query->result_array();
}

public function get_all_reservation()
{

                $query = $this->db->get('reservation');
                return $query->result_array();
}
    
}