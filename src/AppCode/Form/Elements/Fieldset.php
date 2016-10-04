<?php

namespace AppCode\Form\Elements;

use AppCode\Form\Contracts\ElementInterface;

class Fieldset extends ElementAbstract
{
    private $class;
    private $legend;
    private $fields = [];

    public function addField(ElementInterface $field){
        $this->fields[] = $field;
        return $this;
    }

    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getLegend()
    {
        return $this->legend;
    }

    public function render()
    {
        echo "<fieldset";
        if($this->getClass())   echo " class='".$this->getClass()."' ";
        echo ">";
        if($this->getLegend())   echo "<legend>".$this->getLegend()."</legend>";

        foreach ($this->fields as $field)
        {
            $field->render();
        }

        echo "</fieldset>";

    }

}

