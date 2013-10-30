
<?php
class Nivel extends AppModel{
    public $name="Nivel"; 
    public $displayField = "nivel";
 //para mostrar directamente o campo nivel
    
 //turma pertence a um nivel    
    /* public $belongsTo = array( 
        'Turma' => array(
            'className' => 'Turma',
            'foreignKey' => 'turma_crianca_id',           
            ) );*/ 
     public $validate = array(

       
   'nivel' => array(
'allowedChoice' => array(
'rule' => array('inList', array('1', '2', '3',' 4', '5', '6')),
'message' => 'insira um nivel de 1 - 6')),
);
    
}
?>

