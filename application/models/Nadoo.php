<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nadoo extends CI_Model
{   //function to check if random string generated already exists or not
    public function randomstringurl_exists($randomString)
    {
        $this->db->SELECT('*');
        $this->db->FROM('url_list');
        $this->db->WHERE('short_random_string', $randomString);
        if(count($this->db->get()->result())>0)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    //function to add random string generated short url in database
    public function randomstringurl_add($url_org,$randomString)
    {
        $data['url_org'] = $url_org;
        $data['short_random_string'] = $randomString;
        $data['url_short'] = base_url().'su/'.$randomString;
        $this->db->insert('url_list', $data);
        $affected_rows=$this->db->affected_rows();
        if($affected_rows>0)
        {
            $data['inserted'] = $affected_rows;
            return $data;
        }
        else
        {
            $data['inserted'] = $affected_rows;
            return $data;
        }

    }
    //function to redirect long url to short url
    public function randomstringurl_get($randomstring_url)
    {
        $this->db->SELECT('*');
        $this->db->FROM('url_list');
        $this->db->WHERE('short_random_string', $randomstring_url);
        $res=$this->db->get()->result();
        if(count($res)>0)
        {
            return $res;
        }
        else
        {
            return 1;
        }
    }
}
