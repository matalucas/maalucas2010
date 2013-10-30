<html>
<head>
  <title>  </title>
  </head>
<body>    
    <table border="1">
    <h2>Detalhes do Treinador</h2>
<tr>

    <td> <p><big><strong>ID*:</strong>  <?php echo $a['Treinadore']['id'];?></big></p> </td>
   <td><p><big><strong>NOME:</strong>  <?php echo $a['Treinadore']['nome'];?></big></p></td>
    </tr>
    
   <p><big><strong>APELIDO:</strong>  <?php echo $a['Treinadore']['apelido'];?></big></p>
  
     <p><big><strong>Nacionalidade:</strong> <?php echo $a['Treinadore']['nacionalidade'];?></big></p>
    

    </td>
    <td>
    <p><big><strong>Sexo:</strong>  <?php echo $a['Treinadore']['sexo'];?></big></p>
   <p><big><strong>Email:</strong> <?php echo $a['Treinadore']['email'];?></big></p>
<p><big><strong>Telefone: </strong> <?php echo $a['Treinadore']['telemovel'];?></big></p>
      <p><big><strong>Nivel de treinamento:</strong>  <?php echo $a['Treinadore']['nivel'];?></big></p>
   <p><big><strong>Nivel academica</strong> <?php echo $a['Treinadore']['nivel_academica'];?></big></p>


<p><big><strong>Morada: </strong> <?php echo $a['Treinadore']['morada'];?></big></p>

   </td> 
 </tr>
    </table>
</body>
    </html>

<!--?php echo $this->Html->link('Delete', array('controller'=>'estudantes','action'=>'delete',$a['Estudante']['id']),array('confirm' => 'Tem Certeza?'));?--> 
    
<!--?php echo $this->Html->link('Editar', array('controller'=>'estudantes','action'=>'edit',$a['Estudante']['id']),array('confirm' => 'Tem certeza?'));?--><br>

