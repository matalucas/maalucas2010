<html>
<head>
  <title>  </title>
  </head>
<body>    
    <table border="1">
    <h2>Detalhes do Jogadores</h2>
<tr>
<td>
     <p><big><strong>ID*:</strong>  <?php echo $a['Jogadore']['id'];?></big></p> 
   <p><big><strong>NOME:</strong>  <?php echo $a['Jogadore']['nome'];?></big></p>
    
    
   <p><big><strong>APELIDO:</strong>  <?php echo $a['Jogadore']['apelido'];?></big></p>
  
     <p><big><strong>Nacionalidade:</strong> <?php echo $a['Jogadore']['nacionalidade'];?></big></p>
    <p><big><strong>Naturalidade:</strong> <?php echo $a['Jogadore']['naturalidade'];?></big></p>
    

    </td><>
    <td>
           <p><big><strong>Data de nascimento</strong> <?php echo $a['Jogadore']['data'];?></big></p>
    <p><big><strong>Sexo:</strong>  <?php echo $a['Jogadore']['sexo'];?></big></p>
   <p><big><strong>Escola:</strong> <?php echo $a['Jogadore']['escola'];?></big></p>
<p><big><strong>Posicao: </strong> <?php echo $a['Jogadore']['posicao'];?></big></p>
      <p><big><strong>Nivel de treinamento:</strong>  <?php echo $a['Jogadore']['nivel'];?></big></p>
   <p><big><strong>Nivel academica</strong> <?php echo $a['Jogadore']['nivel'];?></big></p>


<p><big><strong>Morada: </strong> <?php echo $a['Jogadore']['morada'];?></big></p>

   </td> 
 </tr>
    </table>
</body>
    </html>

<!--?php echo $this->Html->link('Delete', array('controller'=>'estudantes','action'=>'delete',$a['Estudante']['id']),array('confirm' => 'Tem Certeza?'));?--> 
    
<!--?php echo $this->Html->link('Editar', array('controller'=>'estudantes','action'=>'edit',$a['Estudante']['id']),array('confirm' => 'Tem certeza?'));?--><br>

 