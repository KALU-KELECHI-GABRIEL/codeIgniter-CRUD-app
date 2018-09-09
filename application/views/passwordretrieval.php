<body>
<?php // echo "right here" ?>

<div class="title">
<h1>PLAYJOOR DBMS</h1>
<H1>Password Generator PAGE</H1>
<?php if($this->uri->segment(2)== "password_generator"){?>
       
   
               <H1> hello there! please log in using the password
               <?php echo " $password";?></h1>
               <p>please do endeavour to change to a more secure password you will remember, once you are logged in</p> 
     
         <?php }
   ?>  


    <form  method="post" action="<?php echo base_url('main/password_generator');?>"><br>
   
  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php if($this->uri->segment(2)=="password_generator"){} else{echo set_value("id");}?>"><br><?php echo form_error('id');?></p>
  <P>  EMAIL: <input type="text" name="email" value="<?php if($this->uri->segment(2) == "password_generator"){} else{echo set_value("email");}?>"><br><?php echo form_error('email');?></p>
    <input type="submit" name="send" value="GENERATE">

   </form> 
   
   
    </div>
   
    

