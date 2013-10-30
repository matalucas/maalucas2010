<html>
<head>
	
	<title>SGC</title>

</head>

<body>
    
<br>  
<?php echo $this->Form->create('Encarregado'); ?>
     <form action="">
<table border=1 bgcolor="lightgray">

    
<article><strong>REGISTAR ENCARREGADO DO JOGADOR</strong></article>

<hr size ="5" color= lightgray>

<tr>
	<td>Nome:</td>
	<td><?php echo $this->Form->input('nome',array('label'=>false)); ?></td>
        
	<td>Apelido:</td>
	<td><?php echo $this->Form->input('apelido',array('label'=>false)); ?></td>
</tr>
 


<tr>
	<td>Nacionalidade:</td>
	<td> <select name="data[Encarregado][nacionalidade]">
<option value="">(selecione)</option>
<option value="Mocambicano(a)">Mocambicano(a)</option>
<option value="Extrangeiro(a)">Extrangeiro(a)</option>
</select></td>
	<td>Naturalidade</td>
	<td><select name="data[Encarregado][naturalidade]">
 <option value="">(selecione)</option>               
<option value="Maputo">Maputo</option>
<option value="Gaza">Gaza</option>
<option value="Inhambane">Inhambane</option>
<option value="Sofala">Sofala</option>
<option value="Manica">Manica</option>
<option value="Tete">Tete</option>
<option value="Zambezia">Zambezia</option>
<option value="Niassa">Niassa</option>
<option value="Nampula">Nampula</option>
<option value="CaboDelgado">CaboDelgado</option>


</select></td>
</tr>

<tr>
<td>Sexo:</td>
        <td> <select name="data[Encarregado][sexo]">
<option value="">(selecione)</option>
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
</select></td>
               
        <td>Morada:</td>
	<td><?php echo $this->Form->input('morada',array('label'=>false)); ?> </td>
</tr>


	
	
<tr>
           
	<td>Telemovel:</td>
	<td><?php echo $this->Form->input('telefone',array('label'=>false)); ?></td>
        
        <td>Email:</td>
	<td><?php echo $this->Form->input('email',array('label'=>false)); ?></td>

</tr>

<tr>
    
	
        <td><input type="submit" value="Registar"  ></td>
         
	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>
</tr>



</table>
      
           
</form>
</body>
</html>


