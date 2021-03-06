<!--  Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"><style>.form-horizontal .form-group {margin-left:0px;margin-right:0px;}</style>
<div class="container">
<h1>Formulário</h1>

<?php
$loader = require_once '../vendor/autoload.php';



$request = new \AppCode\Form\Requests\Request();
$validator = new \AppCode\Form\Validators\Validator($request);
$form = new \AppCode\Form\Form($validator);

$labelNome = new \AppCode\Form\Elements\Label();
$labelNome->setText("Nome");

$inputNome = new \AppCode\Form\Elements\Input();
$inputNome->setAttribute("placeholder", "Insira o seu nome")->setAttribute("class","form-control")->setUnified(true);


$labelEmail = new \AppCode\Form\Elements\Label();
$labelEmail->setText("Email");

$inputEmail = new \AppCode\Form\Elements\Input();
$inputEmail->setAttribute("placeholder", "Insira o seu email")->setAttribute("class","form-control")->setUnified(true);

$fieldSet = new \AppCode\Form\Elements\Fieldset();
$fieldSet->setLegend("Dados Pessoais")->addField($labelNome)->addField($inputNome)->addField($labelEmail)->addField($inputEmail);

$form->addField($fieldSet);
$form->render();


/*

use AppCode\Form\Rendering;

$cols[] = array(
    'label'       => 'Nome',
    'name'        => 'nome',
    'type'        => 'input',
    'value'       => '',
);
$cols[] = array(
    'label'       => 'E-mail',
    'name'        => 'email',
    'type'        => 'email',
    'value'       => '',

);

$cols[] = array(
    'label'      => 'Sexo',
    'name'       => 'sexo',
    'type'       => 'radio',
    'value'      => array(
        array('opt'=>'M','text'=>'Masculino'),
        array('opt'=>'F','text'=>'Feminino')
    ),


);

$cols[] = array(
    'label'       => 'Data de Nascimento',
    'name'        => 'nascimento',
    'type'        => 'date',
    'value'       => '',
    'placeholder' => ''
);
$cols[] = array(
    'label'      => 'Disponibilidade',
    'name'       => 'disponibilidade',
    'type'       => 'checkbox',
    'value'      => array(
        array('opt'=>'M','text'=>'Matutina'),
        array('opt'=>'V','text'=>'Vespertino')
    ),

);
$cols[] = array(
    'label'       => 'Descrição',
    'name'        => 'descricao',
    'type'        => 'textarea',
    'value'       => '',
);

$cols[] = array(
    'label'       => '',
    'name'        => 'enviar',
    'type'        => 'submit',
    'value'       => 'Enviar',

);
$form = new Rendering($cols);


*/






