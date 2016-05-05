<?php

namespace AppCode\Form;

use AppCode\Form\Elements\TextArea;
use /*AppCode\Form\Form,*/
    AppCode\Form\Validators\Validator,
    AppCode\Form\Requests\Request;

use AppCode\Form\Elements\Input,
    AppCode\Form\Elements\Label;

class Rendering {

    public function __construct($cols =[]){

        $request   = new Request();
        $validator = new Validator($request);
        $form      = new Form($validator);
        $form->setClass('form-horizontal');

        foreach ($cols as $col){

            if($col['label'])
            {

                $label = new Label([
                                    'for'  => $col['label'],
                                    'class'=> 'col-sm-2 control-label'
                ]);
                $label->setText($col['label']);
                $form->addField($label);

            }


            if($col['type']=='radio' || $col['type']=='checkbox')
            {


                $last = count($col['value']);
                $i    = 0;

                foreach ($col['value'] as $opt){

                    $i++;

                    $input = new Input([
                        'type'        =>  $col['type'],
                        'name'        =>  $col['name'],
                        'value'       =>  $opt['opt'],
                    ]);

                    $input->setText($opt['text']);

                    if($i == 1)
                    {
                        $input->setUnified('first');
                    }
                    else if($i == $last)
                    {
                        $input->setUnified('last');
                    }
                    else {
                        $input->setUnified('loop');
                    }

                    $form->addField($input);

                }

            }


            else if($col['type']=='textarea')

            {
                $input = new TextArea([
                    'type'        =>  $col['type'],
                    'id'          =>  $col['name'],
                    'name'        =>  $col['name'],
                    'class'       =>  'form-control',
                    'value'       =>  $col['value'],

                ]);

                $form->addField($input);

            }



            else if($col['type']=='submit')

            {

                $label = new Label([
                    'for'  => $col['label'],
                    'class'=> 'col-sm-2 control-label'
                ]);
                $label->setText($col['label']);
                $form->addField($label);

                $input = new Input([
                    'type'        =>  $col['type'],
                    'id'          =>  $col['name'],
                    'value'       =>  $col['value'],
                    'class'       =>  'col-sm-2 btn btn-default',
                    'value'       =>  $col['value'],

                ]);

                $form->addField($input);

            }

            else
            {
                $input = new Input([
                    'type'        =>  $col['type'],
                    'id'          =>  $col['name'],
                    'name'        =>  $col['name'],
                    'class'       =>  'form-control',
                    'value'       =>  $col['value'],

                ]);

                $form->addField($input);

            }

        }

        $form->render();



    }

}