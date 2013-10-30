<html>
<head>
	
	<title>Sistema de gestao de Jogadores</title>

</head>

<body>
    
</div>    
<br>  
<?php echo $this->Form->create('Treinadore'); ?>
     <form action="">
<table border=1 bgcolor="lightgray">

    
<article><strong>REGISTAR TREINADOR DO JOGADOR</strong></article>

<hr size ="5" color= lightgray>

<tr>
	<td>Nome:</td>
	<td><?php echo $this->Form->input('nome',array('label'=>false)); ?></td>
        
	<td>Apelido:</td>
	<td><?php echo $this->Form->input('apelido',array('label'=>false)); ?></td>
</tr>
 


<tr>
	<td>Nacionalidade:</td>
	<td> <select name="data[Treinador][nacionalidade]">
<option value="">(selecione)</option>
<option value="Mocambicano(a)">Mocambicano(a)</option>
<option value="Extrangeiro(a)">Estrangeiro(a)</option>
</select></td>
	<td>Naturalidade</td>
	<td><select name="data[Treinador][naturalidade]">
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
        <td> <select name="data[Treinador][sexo]">
<option value="">(selecione)</option>
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
</select></td>
               
        <td>Morada:</td>
	<td><?php echo $this->Form->input('morada',array('label'=>false)); ?> </td>
        
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


	
	
<tr>
           
	<td>Telemovel:</td>
	<td><?php echo $this->Form->input('telefone',array('label'=>false)); ?></td>
        
        <td>Email:</td>
	<td><?php echo $this->Form->input('email',array('label'=>false)); ?></td>

</tr>

	
<tr>
    
    <td>Nivel de Treinamento</td>
	<td><select name="data[Jogadore][Modalidade]">
 <option value="">(selecione)</option>               
<option value="N1">N1</option>
<option value="N2">N2</option>
<option value="N3">N3</option>
<option value="N4">N4</option>
<option value="N5">N5</option>

           
	        <td>Nivel Academica</td>
	<td><?php echo $this->Form->input('nivel_academica',array('label'=>false)); ?></td>

</tr>


<tr>
    
	
        <td><input type="submit" value="Registar"  ></td>
         
	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>
</tr>



</table>
      
           
</form>
</body>
</html>


