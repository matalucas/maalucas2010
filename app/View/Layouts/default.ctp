<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Template</title>
<!-- Calendar Styles -->
<link href="fullcalendar.css" rel="stylesheet" type="text/css" />
<!-- Fancybox/Lightbox Effect -->
<link href="jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<!-- WYSIWYG Editor -->
<link href="wysiwyg.css" rel="stylesheet" type="text/css" />
<!-- Main Controlling Styles -->
<link href="main.css" rel="stylesheet" type="text/css" />
<!-- Blue Theme Styles -->
<link href="styles.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


		

</head>
<body>
    
		<!--div id="content">
			
		</div>
    

    <!-- Top header/black bar start -->
	
    <div id="header">
           
<?php echo $this->Html->image('logo.png', array("alt"=>"Sistema de Gestao de jogadores ","class"=>"logo"));?>        
        <!--div id="searchbox">
        	<input type="text" class="searchinput" />
            <input type="image" src="./images/search_btn.png" class="searchbtn" />
    	</div-->
    </div>
 <!-- Top header/black bar end -->   
    
<!-- Left side bar start -->
        <div id="left">
<!-- Left side bar start -->

<!-- Toolbox dropdown start -->
        	<div id="openCloseIdentifier"></div>
            <div id="slider">
                <ul id="sliderContent">
                    <li><?php echo $this->Html->link('Login',array('controller'=>'users','action'=>'logout','align'=>'center'));?> </li>
                    <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout','align'=>'center'));?>      </li>
                </ul>
                <div id="openCloseWrap">
                    <div id="toolbox">
            			<a href="#" title="definicoes" class="toolboxdrop">Toolbox <?php echo $this->Html->image('icon_expand_grey.png', array("alt"=>"","class"=>"toolboxdrop"));?></a>
            		</div>
                </div>
            </div>
<!-- Toolbox dropdown end -->   
    	
<!-- Userbox/logged in start -->
            <div id="userbox">
          <?php if($logged_in):?>
     bem vindo:   <?php echo $current_user['username'] ; ?>    <?php echo $this->Html->link('',array('controller'=>'users','action'=>'logout','align'=>'center'));?>      
          <?php else: ?> 
          <?php echo $this->Html->link('Iniciar Sessao',array('controller'=>'users','action'=>'login','align'=>''));?>   
          <?php endif; ?>
           
           <!--p>Welcome Cumbula</p>
                <p><span>You are logged in as Admin</span></p-->
                <ul>
                    <li><a href="http://localhost/SGC/users/logout" title="Logout"><?php echo $this->Html->image('icon_unlock.png', array("alt"=>"logout","class"=>"","height"=>"20","width"=>"20"));?></a></li>
                    <li><a href="#" title="Configure"><?php echo $this->Html->image('icon_cog.png', array("alt"=>"Congiguracoes","class"=>"","height"=>"20","width"=>"20"));?></a></li>
      
                </ul>
            </div>

<!-- Userbox/logged in end -->  

<!-- Main navigation start -->         
            <ul id="nav">
            	<li>
                  <a class="collapsed heading"> REGISTOS</a>
                     <ul class="navigation">
                         <li><a href="http://localhost/FerroviarioMaputo1/jogadores/add" title="visualizar turma">REGISTAR JOGADORES</a></li>                 
                         <li><a href="http://localhost/FerroviarioMaputo1/Treinadores/add" title="visualizar sala">REGISTAR TREINADORES</a></li>                        
                        <li><a href="http://localhost/FerroviarioMaputo1/Encarregados/add" title="visualizar educador"> REGISTAR ENCARREGADOS</a></li>
                        <li><a href="http://localhost/FerroviarioMaputo1/Equipes/add" title="visualizar actividade">REGISTAR EQUIPES</a></li>
                        
                     
                    </ul>
                </li> 
                <hr size ="5" color= white> </hr>
                <!--li>
                    <ul class="navigation">
                        <li class="heading selected">Current Section</li>
                        <li><a href="#" title="">Section link here</a></li>
                        <li><a href="#" title="">Section link here</a></li>
                        <li><a href="#" title="">Section link here</a></li>
                    </ul>
                </li-->
                <li>
                    <a class="collapsed heading">LISTANGENS</a>
                     <ul class="navigation">
                        <li><a href="http://localhost/FerroviarioMaputo1/jogadores/" title="">LISTAR JOGADORES</li> 
                         <li><a href="http://localhost/FerroviarioMaputo1/Treinadores/" title="">LISTAR TREINADORES</a></li>
                               <li><a href="http://localhost/FerroviarioMaputo1/encarregados/" title="">LISTAR ENCARREGADOS</a></li>
                    </ul>
                </li>        
            </ul>
        </div>      
<!-- Main navigation end --> 

<!-- Left side bar start end -->   

<!-- Right side start -->     
        <div id="right">

<!-- Breadcrumb start -->  
            <div id="breadcrumb">
                <ul>	
   <li> <?php echo $this->Html->image('icon_breadcrumb.png', array("alt"=>"Location","class"=>""));?> </li>
                              
                    <li><a href="#" title=""> Menu Principal</a></li>
                    <li>/</li>
                    <li class="current">Painel de Administração</li>
             <a>     <marquee>  <li class="current"><b>*CLUBE COSTA DO SOL*</b></li> </marquee></a>
                </ul>
            </div>
<!-- Breadcrumb end -->  

<!-- Top/large buttons start -->  
            <ul id="topbtns">
            	<li class="desc"><strong>CFM</strong><br /> </li>
                <li>
                	<a href="http://localhost/FerroviarioMaputo1/"><?php echo $this->Html->image('home.gif', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"50"));?><br />Home</a>
                </li>
                
                <li>
                	<a href="http://localhost/FerroviarioMaputo1/users/pesquisa"><?php echo $this->Html->image('pesquisa.jpg', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br />Pesquisa</a>
                </li>
                <li>
                	<a href="http://localhost/FerroviarioMaputo1/jogadores/"><?php echo $this->Html->image('icon_lrg_create.png', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br /> Jogadores</a>
                </li>
                <li>
                	<a href="http://localhost/FerroviarioMaputo1/users/"><?php echo $this->Html->image('icon_lrg_user.png', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br />Usuarios</a>
                </li>
                <!--li>
                	<a href="#"><?php echo $this->Html->image('icon_lrg_media.png', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br />Media</a>
                </li-->
                <li>
                	<a href="http://localhost/SGC/criancas/relatorio"><?php echo $this->Html->image('pdf.jpg', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br />Relatorios</a>
                </li>
                <li>
                	<a href="#"><?php echo $this->Html->image('icon_lrg_support.png', array("alt"=>"","class"=>"photo","height"=>"30","width"=>"30"));?><br />Support</a>
                </li>
            </ul><br><br><br><br><br>
<!-- Top/large buttons end -->  

 <!-- Main content start -->  
 
            <div id="content">
                <?php echo $this->Session->flash(); ?>	
                <?php echo $this->Session->flash('auth'); ?>

<!-- Charts box start -->          
        		<!--div class="container med left" id="graphs">
                          
                	<div class="conthead">
                		<h2>Sales Charts</h2>
                                
                        </div>
<!-- Tabbed navigation start -->                    
                	<!--div class="contentbox">
                    	<ul class="tablinks tabfade">
                        	<li class="nomar"><a href="#graphs-1">Bar</a></li>
                            <li><a href="#graphs-2">Pie</a></li>
                            <li><a href="#graphs-3">Line</a></li>
                            <li><a href="#graphs-4">Area</a></li>
                        </ul>
<!-- Tabbed navigation end -->                       
<!-- Tabbed boxes start -->
                    	<!--div class="tabcontent" id="graphs-1">
                            <table style="display: none; height: 250px" class="bar" width="52%">
                                <caption> Registered Members</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">March</th>
                                        <th scope="col">April</th>
                                        <th scope="col">May</th>
                                        <th scope="col">June</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2011</th>
                                        <td>190</td>
                                        <td>160</td>
                                        <td>40</td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2010</th>
                                        <td>3</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>45</td>
                                        <td>35</td>
                                        <td>49</td>
                                    </tr>	
                                </tbody>
                            </table>
                    </div-->
                        
                    <!--div class="tabcontent" id="graphs-2">
                        <table style="display: none; height: 250px" class="pie" width="52%">
                            <caption> Registered Members</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">March</th>
                                        <th scope="col">April</th>
                                        <th scope="col">May</th>
                                        <th scope="col">June</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2011</th>
                                        <td>190</td>
                                        <td>160</td>
                                        <td>40</td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2010</th>
                                        <td>3</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>45</td>
                                        <td>35</td>
                                        <td>49</td>
                                    </tr>	
                                </tbody>
                            </table>
                    </div-->
                    <!--div class="tabcontent" id="graphs-3">
                            <table style="display: none; height: 250px" class="line" width="52%">
                                <caption> Registered Members</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">March</th>
                                        <th scope="col">April</th>
                                        <th scope="col">May</th>
                                        <th scope="col">June</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2011</th>
                                        <td>190</td>
                                        <td>160</td>
                                        <td>40</td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2010</th>
                                        <td>3</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>45</td>
                                        <td>35</td>
                                        <td>49</td>
                                    </tr>	
                                </tbody>
                            </table>
                    	</div-->
                   		<!--div class="tabcontent" id="graphs-4">
                            <table style="display: none; height: 250px" class="area" width="52%">
                               <caption> Registered Members</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">March</th>
                                        <th scope="col">April</th>
                                        <th scope="col">May</th>
                                        <th scope="col">June</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2011</th>
                                        <td>190</td>
                                        <td>160</td>
                                        <td>40</td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2010</th>
                                        <td>3</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>45</td>
                                        <td>35</td>
                                        <td>49</td>
                                    </tr>	
                                </tbody>
                            </table>
                   		</div-->
<!-- Tabbed boxes end -->  
                      
                    </div-->
                </div-->
                
<!-- Website stats start -->               
                <!--div class="container sml right">
                	<div class="conthead">
                		<h2>Website Stats</h2>
                    </div>
                	<div class="contentbox">
                    	<ul class="summarystats">
                        	<li>
                            	<p class="statcount">30</p> <p>Registrations</p>  <p class="statview"><a href="#" title="view">view</a></p>
                            </li>
                            <li>
                            	<p class="statcount">17</p> <p>New Sales</p>  <p class="statview"><a href="#" title="view">view</a></p>
                            </li>
                            <li>
                            	<p class="statcount">05</p> <p>Pending sales</p>  <p class="statview"><a href="#" title="view">view</a></p>
                            </li>
                            <li>
                            	<p class="statcount">10</p> <p>Support requests</p>  <p class="statview"><a href="#" title="view">view</a></p>
                            </li>
                        </ul>
                        
                        <p><strong>Usage bar examples</strong></p>
                        
                        <table>
                            <tr>
                                <td width="150"><strong><span class="usagetxt redtxt">Red</span></strong></td>
                                <td width="500">
                                    <div class="usagebox">
                                        <div class="highbar" style="width: 85%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><span class="usagetxt orangetxt">Orange</span></strong></td>
                                <td>
                                    <div class="usagebox">
                                        <div class="midbar" style="width: 50%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><span class="usagetxt greentxt">Green</span></strong></td>
                                <td>
                                    <div class="usagebox">
                                        <div class="lowbar" style="width: 25%;"></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div-->
<!-- Website stats end -->  
               
                <!-- Clear finsih for all floated content boxes --> <div style="clear: both"></div>
                
<!-- Form elements start -->                 
        		<!--div class="container half left">
                	<div class="conthead">
                    	<h2>Form Styles</h2>
                    </div>
                	<div class="contentbox">
                    	<div class="inputboxes">
                        	<label for="regular">Regular: </label>
                            <input type="text" id="regular" class="inputbox" />
                        </div>
                        <div class="inputboxes">
                        	<label for="small">Small: </label>
                            <input type="text" id="small" class="inputbox smaller" />
                        </div>
                        <div class="inputboxes">
                        	<label for="correct" class="correcttxt">Correct: </label>
                            <input type="text" id="correct" class="inputbox correctbox" />
                            <img src="./images/icons/icon_tick_sq.png" class="att" alt="Correct" />
                        </div>
                        <div class="inputboxes">
                        	<label for="error" class="errortxt">Error:</label>
                            <input type="text" id="error" class="inputbox errorbox" />
                            <img src="./images/icons/icon_close_sq.png" class="att" alt="Error" />
                        </div>
                        <div class="inputboxes">
                        	<label for="dropdown">Dropdown: </label>
                           	<select name="Dropdown" id="dropdown">
                            	<option />Dropdown Example
                            </select>
                        </div>
                        <div class="inputboxes">
                        	<label>Upload: </label>
                            <input name="" type="file" /> <img src="./images/loading.gif" alt="Loading" />
                        </div>
                        
                        <div class="inputboxes">
                        	<label for="chkbox1">Checkbox: </label>
                           	<input name="" type="checkbox" value="" id="chkbox1" />
                        </div>
                        
                        <div class="inputboxes">
                        	<label for="radio1">Radio one: </label>
                           	<input name="groupr" type="radio" value="" id="radio1" />
                        </div>
                        <div class="inputboxes">
                        	<label for="radio2">Radio two: </label>
                           	<input name="groupr" type="radio" value="" id="radio2" />
                        </div>
                        
                        <p style="padding-top: 25px"><strong><em>WYSIWYG</em> Editor</strong></p>
                        
                        <textarea class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea>
                        
                <p><br /><br />Buttons styles</p>
                <input type="submit" value="Submit" class="btn" /> <input type="submit" value="Submit (Alternative)" class="btnalt" />
                    </div>
                </div-->
                
<!-- Form elements end -->  
 
<!-- Gallery start -->   
                <!--div class="container half right">
                	<div class="conthead">
                		<h2>Gallery</h2>
                    </div>
                	<div class="contentbox">
                    	<ul class="gallerybox">
                        	<li>
                            	<a href=" <?php echo $this->Html->image('example1_1rg.jpg', array("alt"=>"","class"=>"galleryimg"));?>"> <?php echo $this->Html->image('example1_sml.jpg', array("alt"=>"Gallery Example","class"=>"galleryimg"));?></a>
                                
                                <p>Title of Image</p>
                            </li>
                            <li>
                            	<a href="./images/examples/example2_lrg.jpg" class="galleryimg"><img src="./images/examples/example2_sml.jpg" alt="Gallery Example" /></a>
                                <p>Title of Image</p>
                            </li>
                            <li>
                            	<a href="./images/examples/example3_lrg.jpg" class="galleryimg"><img src="./images/examples/example3_sml.jpg" alt="Gallery Example" /></a>
                                <p>Title of Image</p>
                            </li>
                            <li>
                            	<a href="./images/examples/example4_lrg.jpg" class="galleryimg"><img src="./images/examples/example4_sml.jpg" alt="Gallery Example" /></a>
                                <p>Title of Image</p>
                            </li>
                            <li>
                            	<a href="./images/examples/example5_lrg.jpg" class="galleryimg"><img src="./images/examples/example5_sml.jpg" alt="Gallery Example" /></a>
                                <p>Title of Image</p>
                            </li>
                        </ul>
                    </div>
                </div -->
 <!-- Gallery end -->
 
<!-- Generic style tabbing start -->                 
                <!--div class="container half right" id="tabs">
                	<div class="conthead">
                        <h2 class="left">Generic Styles</h2>
                        <ul class="tabhead">
                            <li><a href="#tabs-1">Lists</a></li>
                            <li><a href="#tabs-2">Headings</a></li>
                            <li><a href="#tabs-3">Misc</a></li>
                        </ul>
                    </div>
                	<div class="contentbox">
                        <div id="tabs-1">
                        	<h3>Various list styles</h3>
							<ul class="standard">
                            	<li>Lorem ipsum dolor sit amet, consectetuer</li>
                                <li>Duis autem vel eum iriure dolor in hendrerit</li>
                                <li><strong>Lorem ipsum dolor</strong> <a href="#">sit amet, consectetuer</a></li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                            
                            <ul class="features">
                            	<li>Lorem ipsum dolor sit amet, consectetuer</li>
                                <li class="alt">Duis autem vel eum iriure dolor in hendrerit</li>
                                <li><strong>Lorem ipsum dolor</strong> <a href="#">sit amet, consectetuer</a></li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                        <div id="tabs-2">
                        	<h3>Various heading styles</h3>
							<h1>Heading 1</h1>
                            <h2>Heading 2</h2>
                            <h3>Heading 3</h3>
                            <h4>Heading 4</h4>
                        </div>
                        <div id="tabs-3">
                        	<h3>Various text styles</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer <span class="highlight">highlighted text</span> , sed diam nonummy nibh euismod</p>
                            
                            <p><span class="dropcap">D</span>rop cap example to make your text stand out more. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    	</div>
                    </div>
                </div-->
<!-- Generic style tabbing start -->  
                
                <!-- Clear finsih for all floated content boxes --><div style="clear: both"></div>
                
<!-- Calendar start -->             
                <div class="container">
                	<div class="conthead">
                        <b><h1>COSTA DO SOL</h1></b>
                    </div>
                    <div class="contentbox">
    <?php echo $content_for_layout?>                     
                    	<!-- This calls the calendar --> <!--div id="calendar"></div-->
                    </div>
                </div>
<!-- Calendar end -->
    
<!-- Table styles start -->           
                <!--div class="container">
                    
                	<div class="conthead">
                		<h2>Table Example</h2>
                    </div>
                   
                	<div class="contentbox">
                            
                        <table width="100%">
                            
                            <thead>
                                
                                <tr>
                                    <th>Heading</th>
                                    <th>Another Heading</th>
                                    <th>Actions</th>
                                    <th><input name="" type="checkbox" value="" id="checkboxall" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Content Here</td>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</td>
                                    <td>
                                        <a href="#" title=""><img src="./images/icons/icon_edit.png" alt="Edit" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_approve.png" alt="Approve" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_delete.png" alt="Delete" /></a>
                                    </td>
                                    <td><input type="checkbox" value="" name="checkall" /></td>
                                </tr>
                                <tr class="alt">
                                    <td>Content Here</td>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</td>
                                    <td>
                                        <a href="#" title=""><img src="./images/icons/icon_edit.png" alt="Edit" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_approve.png" alt="Approve" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_delete.png" alt="Delete" /></a>
                                    </td>
                                    <td><input type="checkbox" value="" name="checkall" /></td>
                                </tr>
                                <tr>
                                    <td>Content Here</td>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</td>
                                    <td>
                                        <a href="#" title=""><img src="./images/icons/icon_edit.png" alt="Edit" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_approve.png" alt="Approve" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_delete.png" alt="Delete" /></a>
                                    </td>
                                    <td><input type="checkbox" value="" name="checkall" /></td>
                                </tr>
                                 <tr class="alt">
                                    <td>Content Here</td>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</td>
                                    <td>
                                        <a href="#" title=""><img src="./images/icons/icon_edit.png" alt="Edit" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_approve.png" alt="Approve" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                        <a href="#" title=""><img src="./images/icons/icon_delete.png" alt="Delete" /></a>
                                    </td>
                                    <td><input type="checkbox" value="" name="checkall" /></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="extrabottom">
                        	<ul class="pagination">
                                <li class="text">Previous</li>
                                <li class="page"><a href="#" title="">1</a></li>
                                <li><a href="#" title="">2</a></li>
                                <li><a href="#" title="">3</a></li>
                                <li><a href="#" title="">4</a></li>
                                <li class="text"><a href="#" title="">Next</a></li>
                            </ul>
                            <div class="bulkactions">
                                <select>
                                    <option />Select bulk action...
                                </select>
                                <input type="submit" value="Apply" class="btn" />
                            </div>
                        </div>
                    </div>
                </div-->
<!-- Table styles end -->  
                
                <!-- Status Bar Start -->
                
                <!--div class="status warning">
                    <p class="closestatus"><a href="./index.html" title="Close">x</a></p>
                    <p><img src="./images/icons/icon_warning.png" alt="Warning" /><span>Attention!</span> Lorem ipsum dolor sit amet, consectetuer, sed diam nonummy nibh.</p>
                </div-->
                <!-- Status Bar End -->
                
                 <!-- Red Status Bar Start -->
                <!--div class="status success">
                    <p class="closestatus"><a href="./index.html" title="Close">x</a></p>
                    <p><img src="./images/icons/icon_success.png" alt="Success" /><span>Success!</span> Lorem ipsum dolor sit amet, consectetuer adipiscing, sed diam nonummy nibh.</p>
                </div-->
                <!-- Red Status Bar End -->
                
                <!-- Green Status Bar Start -->
                <!--div class="status error">
                    <p class="closestatus"><a href="./index.html" title="Close">x</a></p>
                    <p><img src="./images/icons/icon_error.png" alt="Error" /><span>Error!</span> Lorem ipsum dolor sit amet, consectetuer adipiscing, sed diam nonummy nibh.</p>
                </div-->
                <!-- Green Status Bar End -->
                
                <!-- Blue Status Bar Start -->
                <!--div class="status info">
                    <p class="closestatus"><a href="./index.html" title="Close">x</a></p>
                    <p><img src="./images/icons/icon_info.png" alt="Information" /><span>Information:</span> Lorem ipsum dolor sit amet, consectetuer adipiscing, sed diam nonummy nibh.</p>
                </div-->
                <!-- Blue Status Bar End -->   
        	</div>
            
<!-- Footer start --> 
            <p id="footer">&copy; Todos direitos reservados, Gestao de jogadores 2013.</p>
<!-- Footer end -->      
     
        </div>
<!-- Right side end --> 

		<script type="text/javascript" src="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>	
   		<script type='text/javascript' src='http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js'></script>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js'></script>
        <script type='text/javascript' src='./js/jquery.fancybox-1.3.4.pack.js'></script>
        <script type='application/javascript' src='./js/fullcalendar.min.js'></script>
        <script type='text/javascript' src='./js/jquery.wysiwyg.js'></script>
        <script type='text/javascript' src='./js/visualize.jQuery.js'></script>
        <script type='application/javascript' src='./js/functions.js'></script>
        
        
    
    
            
	<!-- Nao mostrar historico de execucao sql ?php echo $this->element('sql_dump'); ?-->
</body>
</html>
