<html>
<head>
	
	<title>Sistema de gestao de jogador</title>

</head>

<body>
<?php echo $this->Form->create('Jogadore'); ?>
<table border=1 bgcolor="lightgray">
<tr>
    
<article><strong>REGISTAR JOGADORES</strong></article>

<hr size ="5" color= lightgray>



<tr>
     <td>Apelido</td>
	<td><?php echo $this->Form->input('apelido',array('label'=>false)); ?></td>
	<td>Nome</td>
	<td><?php echo $this->Form->input('nome',array('label'=>false)); ?></td>
     
 </tr>
      
<tr>
    
    
	<td>Nacionalidade:</td>
	<td> <select name="data[Jogadore][nacionalidade]">
<option value="">(selecione)</option>
<option value="Mocambicano(a)">Mocambicano(a)</option>
<option value="Extrangeiro(a)">Extrangeiro(a)</option>
</select></td>
	<td>Naturalidade</td>
	<td><select name="data[Jogadore][naturalidade]">
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
     <td>Data de nascimento</td>
	<td><?php echo $this->Form->input('data',array('label'=>false)); ?></td>
      
     <td>Sexo:</td>
        <td> <select name="data[Jogadore][sexo]">
<option value="">(selecione)</option>
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
</select></td>
</tr>

      <tr>
    <td>Nivel Academica</td>
	<td><?php echo $this->Form->input('nivel',array('label'=>false)); ?></td>
	<td>Posicao</td>
	<td><?php echo $this->Form->input('posicao',array('label'=>false)); ?></td>
        
        <td>Modalidade</td>
	<td><select name="data[Jogadore][Modalidade]">
 <option value="">(selecione)</option>               
<option value="Futebol-11">Futebol-11</option>
<option value="Basketbol">Basketbol</option>
<option value="Futsal">Futsal</option>
<option value="Atletismo">Atletismo</option>
<option value="Voleibol">Voleibol</option>
<option value="Andebol">Andebol</option>
<option value="Natacao">Natacao</option>
<option value="Hoquei">Hoquei</option>
<option value="Box">Box</option>
<option value="Tennis">Tennis</option>

        
      </tr>
       <td>Escola</td>
	<td><?php echo $this->Form->input('escola',array('label'=>false)); ?></td>
	<td>Morada</td>
	<td><?php echo $this->Form->input('morada',array('label'=>false)); ?></td>
        <td>Contacto</td>
	<td><?php echo $this->Form->input('Contacto',array('label'=>false)); ?></td>

	
      </tr>
      
      
      
      <tr>  
        
        <td><?php echo $this->Form->end('Registar'); ?></td>
 	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>  
      
</tr>



</table>
</body>
</html>



