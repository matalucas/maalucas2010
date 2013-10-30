<?php

class Educador extends AppModel{
    public $name="Educador";
     public $displayField = "nome";
     
 
     public $validate = array(

'email' => 'email',
         'email' => array(
'rule' => array('email'),
'message' => 'formato de email incorreto'

),
         
 
    
'numero_documento' => array(
'unique' => array(
'rule' => 'isUnique',
'message' => 'o numero deve ser unico'
)),

         'nome' => array(
'required' => array(
'rule' => array('notEmpty'),
'message' => 'Introduza o nome')),
         
         'telemovel' => array(
'rule' => array('between', 0, 9),
'message' => 'introduza apenas 9 digitos'

));
    
}
?>
