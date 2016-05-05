<?php

namespace AppCode\Form\Contracts;

interface FormInterface
{

    public function __construct(ValidatorInterface $validator);
    public function setMethod($method);
    public function addField(ElementInterface $field);
    public function render();

}

