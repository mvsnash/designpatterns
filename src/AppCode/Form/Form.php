<?php

namespace AppCode\Form;

use AppCode\Form\Contracts\ElementInterface;
use AppCode\Form\Contracts\FormInterface;
use AppCode\Form\Contracts\ValidatorInterface;

class Form implements FormInterface {


    private $method;
    private $action;
    private $fields;
    private $validator;
    private $DivGroup;


    public function __construct(ValidatorInterface $validator)
    {

        $this->validator = $validator;
        $this->method   = 'post';
        $this->id       = false;
        $this->target   = false;
        $this->enctype  = false;
        $this->class    = 'form-horizontal';
        $this->DivGroup      = 'form-group';
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function setEnctype($enctype)
    {
        $this->enctype = $enctype;
        return $this;
    }
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getEnctype()
    {
        return $this->enctype;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function getMethod()
    {
        return $this->method;
    }


    public function addField(ElementInterface $field){


        $this->fields[] = $field;

    }




    public function createField($fileName, $fieldAttributes = []){

        $namesapce = "AppCode\\Form\\Elements\\";
        $className = $namesapce.ucfirst(strtolower($fileName));

        if(class_exists($className))
        {
            return new $className($fieldAttributes);
        }
        else
        {
            return false;
        }
    }

    public function render(){



        echo "<form method='".$this->getMethod()."' ";

        if($this->getAction())  echo "action='".$this->getAction()."' ";
        if($this->getId())      echo "id='".$this->getId()."' ";
        if($this->getClass())   echo "class='".$this->getClass()."' ";
        if($this->getEnctype()) echo "enctype='".$this->getEnctype()."' ";
        if($this->getTarget())  echo "target='".$this->getTarget()."' ";

        echo ">\n";


            foreach ($this->fields as $field)
            {

                    $field->render();
            }


        echo '</form>';

    }



}
