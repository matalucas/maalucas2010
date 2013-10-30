<html>
<head>
	
	<title>SGC</title>

</head>

<body>
<?php echo $this->Form->create('Actcurricular'); ?>
<table border=1 bgcolor="lightgray">

    
<article><strong>REGISTAR ACTIVIDADE </strong></article>

<hr size ="5" color= lightgray>



<tr>
     
	<td>nome da actividade</td>
 <td>  
    <select name="data[Actcurricular][nome_actividade]">
        <option value="">(selecione)</option>
        <option value="Danca">Danca</option>
        <option value="Canto">Canto</option>
        <option value="Passeio">Passeio</option>
        
    </select></td>

        
       <td>duracao:</td>
	<td><?php echo $this->Form->input('duracao',array('label'=>false)); ?></td> 
       
</tr>



<tr>

	<td><?php echo $this->Form->end('Registar'); ?></td>
 	<td><input type="reset" name="cmdLimpiar" value="Limpar"></td>
	
	
</tr>


</table>
</body>
</html>


