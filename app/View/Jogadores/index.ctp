
<h2>Vizualizar Treinadores</h2>
<table border="1">
<tr>
        <th> id   </th>
        <th> nome </th> 
        <th> apelido </th> 
        <th>data</th> 
        <th> nacionalidade </th>  
        <th> naturalidade  </th>
         <th> sexo </th>
        <th> morada</th> 
         <th> posicao </th>
        <th> nivel </th> 
        <th>escola</th> 
    
</tr>
     <?php foreach($a as $aa):?>
<tr>
  
  <td><?php echo $aa['Jogadore']['id'];?></td>
  <td><?php echo $aa['Jogadore']['nome'];?></td>
  <td><?php echo $aa['Jogadore']['apelido'];?></td>
  <td><?php echo $aa['Jogadore']['nacionalidade'];?></td>
  <td><?php echo $aa['Jogadore']['naturalidade'];?></td>
  <td><?php echo $aa['Jogadore']['sexo'];?></td>
  <td><?php echo $aa['Jogadore']['morada'];?></td>
  <td><?php echo $aa['Jogadore']['nivel'];?></td>
  <td><?php echo $aa['Jogadore']['posicao'];?></td>
 
  <td><?php echo $aa['Jogadore']['escola'];?></td>
 
 
  <td><?php echo $this->Html->link('Excluir', array('controller'=>'jogadores','action'=>'delete',$aa['Jogadore']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>     
    
<td><?php echo $this->Html->link('Editar', array('controller'=>'jogadores','action'=>'edit',$aa['Jogadore']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

<td><?php echo $this->Html->link('detalhes', array('controller'=>'jogadores','action'=>'view',$aa['Jogadore']['id']));?></td>

</tr>     

    <?php endforeach; ?>
      </table><br>

<?php  echo $this->Paginator->prev('<<Anterior |');?>
<?php  echo $this->Paginator->numbers();?>
<?php  echo $this->Paginator->next(' |Proximo>>');?> 


