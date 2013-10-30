 <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="actions">
<?php echo $this->Html->link('Nova Equipe', array('controller'=>'equipes','action'=>'add'));?>
</div>
<br>
<h2>Vizualizar Equipe</h2>
<table border="1">
<tr>
        <th> id   </th>
        <th> Equipe </th> 
    
</tr>
     <?php foreach($a as $aa):?>
<tr>
  
  <td><?php echo $aa['Equipe']['id'];?></td>
  <td><?php echo $aa['Equipe']['nome'];?></td>
 
 
  
<td><?php echo $this->Html->link('Excluir', array('controller'=>'Equipes','action'=>'delete',$aa['Equipe']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>     
       
<td><?php echo $this->Html->link('Editar', array('controller'=>'Equipes','action'=>'edit',$aa['Equipe']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

<td><?php echo $this->Html->link('detalhes', array('controller'=>'Equipes','action'=>'view',$aa['Equipe']['id']));?></td>

</tr>   

    

    <?php endforeach; ?>
      </table><br>






