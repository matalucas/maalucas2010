<html>
<head>
  <title>  </title>
  </head>
<body>    
    <table border="1">
    <h2>Detalhes da turma</h2>
<tr>
 <td> <p><big><strong>ID*:</strong>  <?php echo $a['Equipe']['id'];?></big></p> 
   <p><big><strong>Nome da turma:</strong>  <?php echo $a['Equipe']['nome'];?></big></p>
   
 </tr>
    </table>
</body>
    </html>

<!--?php echo $this->Html->link('Delete', array('controller'=>'estudantes','action'=>'delete',$a['Estudante']['id']),array('confirm' => 'Tem Certeza?'));?--> 
    
<!--?php echo $this->Html->link('Editar', array('controller'=>'estudantes','action'=>'edit',$a['Estudante']['id']),array('confirm' => 'Tem certeza?'));?--><br>



