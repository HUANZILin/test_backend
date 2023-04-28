<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class PlusController extends BaseController
{
    use ResponseTrait;

    public function create()
    {
        $data = $this->request->getPost();

        return $this->respond([
            "data" => $data,
            "msg"  => "POST method call success"
        ]);

    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        return $this->respond([
            "data" => $data,
            "msg"  => "PUT method call success"
        ]);
    }

}
