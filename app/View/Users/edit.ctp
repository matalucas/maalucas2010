<h1>EDITAR DADOS </h1>
 <?php
 
echo $this->Form->create('User', array('action'=>'edit'));
echo $this->Form->inputs();

echo $this->Form->end('actualizar dados');
?>
