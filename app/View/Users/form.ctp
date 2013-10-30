<html>
<head>
	
	<title>SGC</title>

</head>

<body>
    <?php echo $this->Form->create('User',array('action' => 'index', 'type' => 'GET')); ?>
<fieldset>
<h2>PESQUISAR USUARIOS/UTILIZADORES </h2>

<table border="1">
<hr size ="5" color= lightgray>
 <tr>
  <td><?php echo $this->Html->image('pesquisa.jpg', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><?php echo $this->Form->input('id', array('alt'=>'Introduza o id do utilizador','div' => false, 'label'=>'PESQUISA PELO ID :','type'=>'text'));?></td>
  <td> <?php echo $this->Form->submit('Pesquisar',array('class'=>'button')); ?> </td>
 </tr>
<tr> 
 <td><?php echo $this->Html->image('pesquisa.jpg', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?> <?php echo $this->Form->input('name', array('alt'=>'Introduza o nome do utilizador','div' => false, 'label'=>'PESQUISA PELO NOME :','type'=>'text'));?> </td>
 
 <td> <?php echo $this->Form->submit('Pesquisar',array('class'=>'button')); ?> </td>
 
<?php echo $this->Form->end();?>
 
</tr>
</table>
 </body>
</html>

