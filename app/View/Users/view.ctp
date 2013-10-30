

<div class="actions">
   <td><?php echo $this->Html->link('Novo Utilizador', array('controller'=>'users','action'=>'add',$a['User']['id']));?>
   <td> <?php echo $this->Html->link('listar Utilizadores', array('controller'=>'users','action'=>'index',$a['User']['id']));?>
    
      
</div><br>

<h2>DETALHES DO UTILIZADOR</h2>
<table border=1>

                 

 <tr><td> <p><strong>ID*:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>  <?php echo $a['User']['id'];?></td></big></p>
 
  <td> <p><strong>NOME:</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <br><br>  <?php echo $a['User']['name'];?></big></p></td>  
   <td><p><strong>USERNAME:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <br><br>   <?php echo $a['User']['username'];?></big></p></td> 
    <td>   <p><strong>EMAIL:</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br><br>   <?php echo $a['User']['email'];?></big></p></td> 
<td>   <p><strong>ROLE:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br> <br>   <?php echo $a['User']['role'];?></big></p></td> </tr>
 
 

</table>




