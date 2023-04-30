<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('welcome_message');
    }

    public function options()
    {
        return $this->respond([
            "status" => 'on',
            "request" => $this->request->getIPAddress()
        ]);
    }

    public function apiFetch()
    {
        return view('api_fetch');
    }

    public function apiAxios()
    {
        return view('api_axios');
    }
}
