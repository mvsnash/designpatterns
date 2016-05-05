<?php

namespace AppCode\Form\Validators;
use AppCode\Form\Contracts\RequestInterface;
use AppCode\Form\Contracts\ValidatorInterface;

class Validator implements ValidatorInterface
{

    private $validator;
    private $request;

    public function __construct(RequestInterface $request)
    {

        $this->request = $request;

    }

    public function getValidator()
    {

        return $this->validator;

    }
}