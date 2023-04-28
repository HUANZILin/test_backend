<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return $this->respond([
            "data" => "GET",
            "msg"  => "GET method call success"
        ]);
    }

    public function create()
    {
        $data   = $this->request->getPost();

        return $this->respond([
            "data" => $data,
            "msg"  => "POST method call success"
        ]);

    }

    public function update($id = null)
    {
        // $data   = $this->request->getJSON(true);
        $data   = $this->request->getPost();

        return $this->respond([
            "data" => $data,
            "msg"  => "PUT method call success"
        ]);
    }

    public function delete($id = null)
    {
        return $this->respond([
            "msg"  => "delete method call success"
        ]);
    }
}
