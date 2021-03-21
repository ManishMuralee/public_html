<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function index()
    {
        $content = array('link' => 'front/index');
        $this->load->view('front/page', $content);
    }


    public function randomstringurl()
    {
        $url_org = $this->input->post("url_org");
        
        if (in_array($url_org, array('', 'about:blank', 'undefined', 'http://localhost/'))) {
        	die('Not a valid URL');
        }

        if (filter_var($url_org, FILTER_VALIDATE_URL) === FALSE) {
            die('Not a valid URL');
        }
        
        if (strpos($url_org, base_url()) === 0) {
	 die('Already a short link !');
        }


        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        $length=4;
        $c=0;
        $a=0;
        while($c==0) {
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $c = $this->Nadoo->randomstringurl_exists($randomString);
        }
        if($c==1)
        {
            $data_inserted=$this->Nadoo->randomstringurl_add($url_org,$randomString);
        }
        return $data_inserted;
    }



    public function shorturlnow()
    {
        $data_inserted=$this->randomstringurl();
        if($data_inserted['inserted']>0)
        {
            print_r($data_inserted['url_short']);
        }

    }



    public function redirect_url()
    {
        $randomstring_url = $this->uri->segment(2);
        $redirect_data=$this->Nadoo->randomstringurl_get($randomstring_url);
        if($redirect_data==1)
        {
            $this->load->helper('url');
            redirect(base_url().'error');
        }
        else
        {
            $url_org_redirect=$redirect_data[0]->url_org;
            $this->load->helper('url');
            redirect($url_org_redirect);
        }
    }

    public function page404()
    {
        $content = array('link' => 'front/error');
        $this->load->view('front/page', $content);
    }


}










