<?php

namespace AppCode\Form\Elements;

class TextArea extends ElementAbstract
{


    public function render()
    {

        echo "<div class='form-group col-sm-10'>\n<textarea";
        foreach ( $this->attributes as $attKey => $attValue ) { echo " {$attKey}='{$attValue}'";
        }
        echo "></textarea>";
        echo "</div></div>\n";

    }

}

