
<h2>Vizualizar Treinadores</h2>
<table border="1">
<tr>
        <th> id   </th>
        <th> nome </th> 
        <th> apelido </th>   
        <th> nacionalidade </th>  
        <th> naturalidade  </th>
         <th> sexo </th>
        <th> morada</th> 
     
        <th> telemovel </th>
        <th> nivel </th> 
        <th> email</th> 
    
</tr>
     <?php foreach($a as $aa):?>
<tr>
  
  <td><?php echo $aa['Treinadore']['id'];?></td>
  <td><?php echo $aa['Treinadore']['nome'];?></td>
  <td><?php echo $aa['Treinadore']['apelido'];?></td>
  <td><?php echo $aa['Treinadore']['nacionalidade'];?></td>
  <td><?php echo $aa['Treinadore']['naturalidade'];?></td>
  <td><?php echo $aa['Treinadore']['sexo'];?></td>
  <td><?php echo $aa['Treinadore']['morada'];?></td>
  <td><?php echo $aa['Treinadore']['nivel'];?></td>
  <td><?php echo $aa['Treinadore']['nivel_academica'];?></td>
 
  <td><?php echo $aa['Treinadore']['telemovel'];?></td>
  <td><?php echo $aa['Treinadore']['email'];?></td>
 
  
<td><?php echo $this->Html->link('Excluir', array('controller'=>'treinadores','action'=>'delete',$aa['Treinadore']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>     
    
<td><?php echo $this->Html->link('Editar', array('controller'=>'treinadores','action'=>'edit',$aa['Treinadore']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

<td><?php echo $this->Html->link('detalhes', array('controller'=>'treinadores','action'=>'view',$aa['Treinadore']['id']));?></td>

</tr>     

    <?php endforeach; ?>
      </table><br>

<?php  echo $this->Paginator->prev('<<Anterior |');?>
<?php  echo $this->Paginator->numbers();?>
<?php  echo $this->Paginator->next(' |Proximo>>');?> 


