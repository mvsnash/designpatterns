<?php

namespace AppCode\Form\Elements;

class Input extends ElementAbstract
{


    public function render()
    {
        if((!$this->getUnified())  || ($this->getUnified() === 'first')){
            echo "<div class='col-sm-10 '>";
        }

        echo "\n<input ";
        foreach ( $this->attributes as $attKey => $attValue ) {
            echo "{$attKey}='{$attValue}' ";
        }
        echo "/>";

        if($this->getText() != null){ echo ' '.$this->getText(); }

        if((!$this->getUnified())  || ($this->getUnified() === 'last')){

            echo "\n</div>\n</div>\n";

        }

    }

}

