
<h2>Vizualizar Encarregados</h2>
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
        <th> profissao </th> 
        <th> email</th> 
    
</tr>
     <?php foreach($a as $aa):?>
<tr>
  
  <td><?php echo $aa['Encarregado']['id'];?></td>
  <td><?php echo $aa['Encarregado']['nome'];?></td>
  <td><?php echo $aa['Encarregado']['apelido'];?></td>
  <td><?php echo $aa['Encarregado']['nacionalidade'];?></td>
  <td><?php echo $aa['Encarregado']['naturalidade'];?></td>
  <td><?php echo $aa['Encarregado']['sexo'];?></td>
  <td><?php echo $aa['Encarregado']['morada'];?></td>
 
  <td><?php echo $aa['Encarregado']['telemovel'];?></td>
  <td><?php echo $aa['Encarregado']['email'];?></td>
 
  
<td><?php echo $this->Html->link('Excluir', array('controller'=>'encarregados','action'=>'delete',$aa['Encarregado']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>     
    
<td><?php echo $this->Html->link('Editar', array('controller'=>'encarregados','action'=>'edit',$aa['Encarregado']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

<td><?php echo $this->Html->link('detalhes', array('controller'=>'encarregados','action'=>'view',$aa['Encarregado']['id']));?></td>

</tr>     

    <?php endforeach; ?>
      </table><br>

<?php  echo $this->Paginator->prev('<<Anterior |');?>
<?php  echo $this->Paginator->numbers();?>
<?php  echo $this->Paginator->next(' |Proximo>>');?> 






