<body>
<?php // echo "right here" ?>

<div class="title">
<H1>WELCOME</H1>
<h1>PLAYJOOR DBMS</h1>
<H1>LOGIN PAGE</H1>

<?php if($this->uri->segment(2)== "password_generator"){?>
       
   
       <H1> hello there! please log in using the password
       <?php echo " $password";?></h1>
       <p><?php echo "please do endeavour to change to a more secure password you will remember, once you are logged in"; ?></p> 
     

 <?php }
?>  



    <form  method="post" action="<?php echo base_url('main/login_validation');?>"><br>
   
  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php if($this->uri->segment(2)=="password_generator"){} else{echo set_value("id");}?>"><br><?php echo form_error('id');?></p>
  <P>  PASSWORD: <input type="password" name="pswd" value="<?php echo set_value("password");?>"><br><?php echo form_error('password');?></p>
  
    <input type="submit" name="send" value="LOGIN">

   </form>
   <table class="title">
   <tr>
   <th><i><a href="<?php echo base_url('main/register') ;?>">sign up here  </a></i></th>
   <th><i><a href="<?php echo base_url() ;?>">   </a></i></th>
   <th><i><a href="<?php echo base_url() ;?>">   </a></i></th>
  <th>   <i><a href="<?php echo base_url('main/forgot_password') ;?>">  forgot password</a></i></th>
</tr>
</table>
<?php if($this->uri->segment(2)== "after_insert"){
        echo "<p> NEW EMPLOYEE ADDED</p>";
        ?><a href="<?php echo base_url('main/index') ?>"> REFRESH</a>
    <?php }?>
    
    </div>
   
    

