<?php

namespace AppCode\Form\Requests;

use AppCode\Form\Contracts\RequestInterface;

class Request implements RequestInterface
{

    private $request;

    public function getRequest()
    {

        return $this->request;

    }

} 