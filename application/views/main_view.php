<body>
<?php // echo "right here"; ?>

<div class="title">
<h1>PLAYJOOR DBMS</h1>
<H1>EMPLOYEE REGISTRATION FORM</H1>
 

<?php if($this->uri->segment(2)== "login_validation"){?>
       
    <?php
 

      foreach($read_data as $key => $data1){
            ?>
            <H1> Welcome 
            <?php echo $data1['name'];?></h1>
            <td><?php //echo $data['id'];?></td>
            <td><?php //echo $data['specialty'];?></td>
            <td><?php //echo $data['phone_num'];?></td>
            <td><?php //echo $data['email'];?></td>
            
      <?php }
//}
//else{echo "no match found in database";}



}?>  


<?php if($this->uri->segment(2)== "index"){
        echo "<H1>EMPLOYEE REGISTRATION FORM</H1>";
    }?>
<?php if($this->uri->segment(2)== "after_update"){
        echo "<H1>EMPLOYEE UPDATED</H1>";
        ?><H2><a href="<?php echo base_url('main/index') ?>"> GO TO HOME/REFRESH</a></H2>
    <?php }?>

    <form  method="post" action="<?php echo base_url('main/form_validation')?>"><br>
    <?php if($this->uri->segment(2)== "after_insertion"){
        echo "<p> NEW EMPLOYEE ADDED</p>";
        ?><a href="<?php echo base_url('main/index') ?>"> GO TO HOME/REFRESH</a>
    <?php }?>
<!-- after deeleting-->
<?php if($this->uri->segment(2)== "after_delete"){
        echo "<p> EMPLOYEE DELETED</p>";
    }?>
  <p> NAME: <input type="text" name="name" value="<?php echo set_value("name");?>"><br> <?php //echo form_error('name');?></p>

<p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php if($this->uri->segment(2)=='login_validation') {/*echo set_value("id");*/} else{echo set_value("id");}?>"><br><?php echo form_error('id');?></p>
  <p> SPECIALTY: <input type="text" name="area" value="<?php echo set_value("area");?>"><br><?php echo form_error('area');?></p>
  <p> PHONE NUMBER: <input type="text" name="phone" value="<?php echo set_value("phone");?>"><br> <?php echo form_error('phone');?></p>
  <p> EMAIL: <input type="text" name="email" value="<?php echo set_value("email");?>"><br><?php echo form_error('email');?> </p>
  <p> PASSWORD: <input type="text" name="pswd" value="<?php if($this->uri->segment(2)=='login_validation') {/*echo set_value("id");*/} else{echo set_value("pswd");};?>"><br><?php echo form_error('pswd');?> </p>
  <p> CONFIRM PASSWORD: <input type="text" name="pswd2" value="<?php echo set_value("pswd2");?>"><br><?php echo form_error('pswd2');?> </p>
   
   click to submit: <input type="submit" name="send">

   </form>

   <form action="<?php echo base_url('main/delete')?>" method="post">
   WANT TO REMOVE SOMEONE: <input type="submit" value="DELETE">
   </form>

   <form action="<?php echo base_url('main/read')?>" method="post">
   WANT TO VIEW SOMEONE: <input type="submit" value="VIEW">
   </form>
   <form action="<?php echo base_url('main/before_update')?>" method="post">
   WANT TO UPDATE SOMEONE: <input type="submit" value="UPDATE">
   </form>
   <h2> <a href="<?php echo base_url('main/index') ?>"> LOGOUT HERE</a></h2>
<?php // echo "right here"; ?>
    </div>
   
    

