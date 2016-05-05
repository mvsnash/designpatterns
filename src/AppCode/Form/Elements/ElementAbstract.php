<?php

namespace AppCode\Form\Elements;
use AppCode\Form\Contracts\ElementInterface;

class ElementAbstract implements ElementInterface {


    protected $attributes;
    protected $text;
    protected $unified;

    public function __construct(array $attributes = [])
    {

        $this->attributes = $attributes;


    }
    public function getText()
    {

        return $this->text;

    }

    public function getUnified()
    {

        return $this->unified;

    }
    public function getAttributes()
    {

        return $this->attributes;

    }
    public function setAttribute($name, $value)
    {

        $this->attributes[$name] = $value;
        return $this;
    }


    public function setAttributes(array $attributes)
    {

        $this->attributes = $attributes;
        return $this;

    }
    public function setText($text = null)
    {

        $this->text = $text;
        return $this;

    }
    public function setUnified($unified = false)
    {

        $this->unified = $unified;
        return $this;

    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }



    public function render(){ }

} 