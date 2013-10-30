<html>
<head>
	
	<title>EQUIPES</title>

</head>

<body>
<?php echo $this->Form->create('Equipe'); ?>
<table border=1 bgcolor="lightgray">
<tr>
    
<article><strong>REGISTAR EQUIPE</strong></article>

<hr size ="5" color= lightgray>



<tr>
    
        
	
        <td>Equipes</td>
	<td><select name="data[Jogadore][Equipes]">
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
      
     
	<td>Data da Fundacao</td>
	<td><?php echo $this->Form->input('data_fundacao',array('label'=>false)); ?></td>
      </tr>
      
<tr>
     
	 <td>Escaloes</td>
	<td><select name="data[Jogadore][Modalidade]">
 <option value="">(selecione)</option>               
<option value="N1">1Escolas</option>
<option value="N2"> Juvenis</option>
<option value="N3"> Juniores</option>
<option value="N2"> Seniores A</option>
<option value="N3"> Seniores B</option>

<tr>
	<td><?php echo $this->Form->end('Registar'); ?></td>
 	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>  
      
</tr>



</table>
</body>
</html>



