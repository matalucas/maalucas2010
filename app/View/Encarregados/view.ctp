<html>
<head>
  <title>  </title>
  </head>
<body>    
    <table border="1">
    <h2>Detalhes do Encarregado</h2>
<tr>

    <td> <p><big><strong>ID*:</strong>  <?php echo $a['Encarregado']['id'];?></big></p> 
   <p><big><strong>NOME:</strong>  <?php echo $a['Encarregado']['nome'];?></big></p>
    
   <p><big><strong>APELIDO:</strong>  <?php echo $a['Encarregado']['apelido'];?></big></p>
  
     <p><big><strong>Nacionalidade:</strong> <?php echo $a['Encarregado']['nacionalidade'];?></big></p>
    

    </td>
    <td>
    <p><big><strong>Sexo:</strong>  <?php echo $a['Encarregado']['sexo'];?></big></p>
   <p><big><strong>Email:</strong> <?php echo $a['Encarregado']['email'];?></big></p>
<p><big><strong>Telefone: </strong> <?php echo $a['Encarregado']['telemovel'];?></big></p>

  
<p><big><strong>Morada: </strong> <?php echo $a['Encarregado']['morada'];?></big></p>

   </td> 
 </tr>
    </table>
</body>
    </html>

<!--?php echo $this->Html->link('Delete', array('controller'=>'estudantes','action'=>'delete',$a['Estudante']['id']),array('confirm' => 'Tem Certeza?'));?--> 
    
<!--?php echo $this->Html->link('Editar', array('controller'=>'estudantes','action'=>'edit',$a['Estudante']['id']),array('confirm' => 'Tem certeza?'));?--><br>

