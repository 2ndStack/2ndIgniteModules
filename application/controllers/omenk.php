<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Omenk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ion_auth_model');
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('template');
         $this->load->helper('url');
    }

    public function index()
    {

        $data = array();
        $data['auth'] = $this->ion_auth;
        $this->template->set_theme('omenk');
        $this->template->set_layout('default')
                ->set_partial('mainnav', 'menu/mainnav')
                ->set_partial('secnav', 'menu/secnav', $data)
                ->set_partial('slidewrap', 'menu/slidewrap')
                ->title('Home', 'halaman utama')
                ->build('home/home');
    }
}

