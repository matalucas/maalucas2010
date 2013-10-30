

<?php echo $this->Form->create('User'); ?>




                <div class="inputcontainer">
                    
                    <label for="username">name:</label>                    
                    <?php echo $this->Form->input('name',array('id'=>'username','label'=>false)); ?>
                    </div>
                  <div class="inputcontainer">
                    <label for="username">Username:</label> 
                        <?php echo $this->Form->input('username',array('id'=>'username','label'=>false)); ?>
                    </div>
                 <div class="inputcontainer">
                    <label for="username">email:</label>   
                  <?php echo $this->Form->input('email',array('id'=>'username','label'=>false)); ?>
                </div>
                <div class="inputcontainer">
                    
                    <label for="password">Password:</label>
                   <?php echo $this->Form->input('password',array('id'=>'password','label'=>false)); ?>
                    </div>


             <div class="inputcontainer">
                    
                    <label for="password">PasswordConfirm:</label>
                   <?php echo $this->Form->input('password_confirmation',array('id'=>'password','label'=>false,'type'=>'password')); ?>
                    </div>
         
                <input type="submit" value="Registar utilizador" class="loginsubmit" />
