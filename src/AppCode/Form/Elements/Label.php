<?php

namespace AppCode\Form\Elements;

class Label extends ElementAbstract
{

  /*  private $text;

    public function setText($text){
        $this->text = $text;
        return $this;
    }


    public function getText(){

        return  $this->text;

    }
*/
    public function render()
    {

        echo "<div class='form-group'>\n<label";
        foreach ( $this->attributes as $attKey => $attValue ) { echo " {$attKey}='{$attValue}'";
        }
        echo ">".$this->getText();
        echo "</label/>\n";

    }

}

