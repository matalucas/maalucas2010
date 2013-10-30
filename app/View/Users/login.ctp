
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CP Login</title>
<link href="login.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
    
    <?php echo $this->Form->create('User', array( 'action'=> 'login'));?>
	<div id="logincontainer">
    	<h1>CP<span>access</span></h1>
        <div id="loginbox">
        	<form action="./index.html" />
                <div class="inputcontainer">
                    <?php echo $this->Html->image('icon_username.png', array("alt"=>"","class"=>"","height"=>"20","width"=>"20"));?>
                    
                    <label for="username">Username:</label>                    
                    <?php echo $this->Form->input('username',array('id'=>'username','label'=>false)); ?>
                </div>
                <div class="inputcontainer">
                    <?php echo $this->Html->image('icon_locked.png', array("alt"=>"Congiguracoes","class"=>"","height"=>"20","width"=>"20"));?>
                    
                    <label for="password">Password:</label>
                    <?php echo $this->Form->input('password',array('id'=>'password','label'=>false)); ?>
                 
                </div>
         
                <input type="submit" value="Login" class="loginsubmit" />
                <p><a href="#">Forgotten password</a></p>
            </form>
        </div>
    </div>
</body>
</html>
