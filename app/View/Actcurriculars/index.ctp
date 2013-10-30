<div class="actions">
<?php echo $this->Html->link('Nova actividade', array('controller'=>'actcurriculars','action'=>'add'));?>
</div>
<br>
<h2>Visualizar Actividade</h2>
<table border="1">
<tr>
        <th> id   </th>
        <th> nome da actividade </th> 
        <th> duracao </th>   
        
  
</tr>
     <?php foreach($a as $aa):?>
<tr>
  
  <td><?php echo $aa['Actcurricular']['id'];?></td>
  <td><?php echo $aa['Actcurricular']['nome_actividade'];?></td>
  <td><?php echo $aa['Actcurricular']['duracao'];?></td>
  
  
  
  
<td><?php echo $this->Html->link('Excluir', array('controller'=>'actcurriculars','action'=>'delete',$aa['Actcurricular']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>     
    
<td><?php echo $this->Html->link('Editar', array('controller'=>'actcurriculars','action'=>'edit',$aa['Actcurricular']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

<td><?php echo $this->Html->link('detalhes', array('controller'=>'actcurriculars','action'=>'view',$aa['Actcurricular']['id']));?></td>

</tr>     

    <?php endforeach; ?>
      </table><br>

<?php  echo $this->Paginator->prev('<<Anterior |');?>
<?php  echo $this->Paginator->numbers();?>
<?php  echo $this->Paginator->next(' |Proximo>>');?> 






