<body>
<?php // echo "right here"; ?>

<div class="title">
<h1>PLAYJOOR DBMS</h1>
<H1>EMPLOYEE REGISTRATION FORM</H1>

<?php if($this->uri->segment(2)== "register_validation"){?>
       
   
       <H1> hello there! 
       <?php echo " the username has already been taken";?></h1>

 <?php }
?>  


    <form  method="post" action="<?php echo base_url('main/register_validation')?>"><br>
 
  <p> NAME: <input type="text" name="name" value="<?php echo set_value("name");?>"><br> <?php //echo form_error('name');?></p>

  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php echo set_value("id");?>"><br><?php echo form_error('id');?></p>
  <p> SPECIALTY: <input type="text" name="area" value="<?php echo set_value("area");?>"><br><?php echo form_error('area');?></p>
  <p> PHONE NUMBER: <input type="text" name="phone" value="<?php echo set_value("phone");?>"><br> <?php echo form_error('phone');?></p>
  <p> EMAIL: <input type="text" name="email" value="<?php echo set_value("email");?>"><br><?php echo form_error('email');?> </p>
  <p> PASSWORD: <input type="text" name="pswd" value="<?php echo set_value("pswd");?>"><br><?php echo form_error('pswd');?> </p>
  <p> CONFIRM PASSWORD: <input type="text" name="pswd2" value="<?php echo set_value("pswd2");?>"><br><?php echo form_error('pswd2');?> </p>
   click to submit: <input type="submit" name="send" value="REGISTER">


    </div>
   
    

