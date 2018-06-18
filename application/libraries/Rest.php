<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest 
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function post() 
    {
        $post = file_get_contents("php://input");
        return json_decode($post, true);
    }
    
    public function response($data = []) 
    {
        echo json_encode($data);
    }
}
