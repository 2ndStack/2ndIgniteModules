<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('ion_auth_model');
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('template');

    }

    public function index()
    {
         if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        elseif (!$this->ion_auth->is_admin())
        {
            //redirect them to the home page because they must be an administrator to view this
            redirect($this->config->item('base_url'), 'refresh');
        }
        else
        {
             $data = array();
        $data['auth'] = $this->ion_auth;
        $this->template->set_theme('omenk');
        $this->template->set_layout('default')
                ->set_partial('mainnav', 'menu/mainnav')
                ->set_partial('secnav', 'menu/secnav', $data)
               ->set_partial('slidewrap', 'menu/slidewrap')
                ->title('Home', 'halaman utama')
                ->build('article/index');

        }


//        $data = array();
//        $data['auth'] = $this->ion_auth;
//        $this->template->set_theme('omenk');
//        $this->template->set_layout('default')
//                ->set_partial('mainnav', 'menu/mainnav')
//                ->set_partial('secnav', 'menu/secnav', $data)
//                ->set_partial('slidewrap', 'menu/slidewrap')
//                ->title('Home', 'halaman utama')
//                ->build('article/index');
    }

    function show()
    {
        $data['querys'] = $this->article_model->getAll();
        $this->load->view('article/show', $data);

    }

    public function save()
    {
        $this->article_model->save();
        echo'sukses';
    }

    public function update()
    {
        $this->article_model->update();
        redirect('article/show');
    }


    function delete($id)
    {
        $this->db->delete('articles', array('id' => $id));
        redirect('article/show');
    }

    //untuk edit data
    function edit()
    {
        $id = $this->uri->segment(3);
        $data['result'] = $this->article_model->getArticle($id);

        if (empty($id) or count($data['result']) == 0) {
            redirect('articles/index');
        } else {
            $result = $this->article_model->getArticle($id);
            $data['id'] = $result['id'];
            $data['title'] = $result['title'];
            $data['category'] = $result['category'];
            $data['contents'] = $result['contents'];
            $this->load->view('article/edit', $data);
        }
    }

}

