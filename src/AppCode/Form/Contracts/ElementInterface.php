<?php

namespace AppCode\Form\Contracts;

interface ElementInterface
{

    public function __construct(array $attributes = []);
    public function render();
    public function setAttributes(array $attributes);
    public function getAttributes();
    public function getAttribute($name);
    public function setAttribute($name, $value);


}



