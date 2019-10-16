<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komoditi');
    }
    

    public function index()
    {
        echo "halo";
    }

}

/* End of file Komoditi.php */

?>