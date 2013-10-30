<html>
<head>
	
	<title>Mocambola</title>

</head>

<body>
<?php echo $this->Form->create('Estado'); ?>
<table border=1 bgcolor="lightgray">
<tr>
    
<article><strong>REGISTAR Estados</strong></article>

<hr size ="5" color= lightgray>



<tr>
     
	<td>Nome</td>
	<td><?php echo $this->Form->input('nome',array('label'=>false)); ?></td>
      
      
     
	<td>Campacidae</td>
	<td><?php echo $this->Form->input('capacidade',array('label'=>false)); ?></td>
      </tr>
      
<tr>
     
	<td>Data da fundacao</td>
	<td><?php echo $this->Form->input('data_nascimento',array('label'=>false)); ?></td>
      
      
     
	<td>Cidade</td>
	<td><?php echo $this->Form->input('cidade',array('label'=>false)); ?></td>
</tr>
<tr>
    <td>Provincia</td>
	<td><?php echo $this->Form->input('provincia',array('label'=>false)); ?></td>
	<td><?php echo $this->Form->end('Registar'); ?></td>
 	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>  
      
</tr>



</table>
</body>
</html>



