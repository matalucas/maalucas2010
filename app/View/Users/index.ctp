<div class="actions">
<?php echo $this->Html->link('Novo utilizador', array('action' => 'add')) ?>
</div>
<br>

<h2>Usuarios Registados</h2>
<table border=1>
<tr>
<th>id</th>
<th> name    </th>       
<th> username    </th> 
<th> email  </th>
         <!--th> password      </th--> 
              <th> role   </th> 
              <th> accao </th> 
                <th> accao </th>
                  <th> accao  </th>
                 <!--th>created</th-->
                     <!--th> modified   </th--> 
                                   
</tr>


<?php foreach($pages as $page):?>
<tr>
    <td><?php echo $page['User']['id'];?></td>
    <td><?php echo $page['User']['name'];?></td>
    <td><?php echo $page['User']['username'];?></td>
<td><?php echo $page['User']['email'];?></td>
   <!--td><?php echo $page['User']['password'];?></td-->
    <td><?php echo $page['User']['role'];?></td>
    <!--td><?php echo $page['User']['created'];?></td-->
    <!--td><?php echo $page['User']['modified'];?></td-->
  



   <td>  <?php echo $this->Html->link('visualizar', array('controller'=>'users','action'=>'view',$page['User']['id']));?><?php echo $this->Html->image('olho.jpg', array("alt"=>"","class"=>"photo","height"=>"25","width"=>"25","align"=>"right"));?> </td>
     <?php if( $current_user['id'] == $page['User']['id'] || $current_user['role'] =='admin' ): ?> 

     <td>  <?php echo $this->Html->link('Excluir', array('controller'=>'users','action'=>'delete',$page['User']['id']),array('confirm' => 'Tem Certeza que deseja apagar?'));?><?php echo $this->Html->image('icon_cross.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>
    
      <td><?php echo $this->Html->link('Editar', array('controller'=>'users','action'=>'edit',$page['User']['id']),array('confirm' => 'Tem certeza que deseja editar?'));?><?php echo $this->Html->image('icon_edit.png', array("alt"=>"","class"=>"photo","height"=>"20","width"=>"20","align"=>"right"));?></td>

   <?php endif; ?>

     
    

      
<?php endforeach; ?>
</table><br>
<?php echo $this->Paginator-> prev('<<Anterior|'),
             $this->Paginator->numbers(),
             $this->Paginator->next('|Proximo>>');?> <br><br>





