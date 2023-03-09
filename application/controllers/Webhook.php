<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webhook extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        file_put_contents('test.json', file_get_contents('php://input'));
        if (isset($_GET['hub_challenge'])) {
            $challenge = $_GET['hub_challenge'];
            $verify_token = $_GET['hub_verify_token'];
            if ($verify_token == "ciao") {
                echo htmlspecialchars($challenge);
            }
        }else{
            file_put_contents('ops.json', file_get_contents('php://input'));
        }
    }


}

