<body>
<?php // echo "right here"; ?>

<div class="title">
<H1>WELCOME</H1>
<h1>PLAYJOOR DBMS</h1>
<H1>FORGOT PASSWORD PAGE</H1>


    <form  method="post" action="<?php echo base_url('main/password_generation');?>"><br>
   
  <p> E-mail: <input type="text" name="email" value="<?php echo set_value("email");?>"><br><?php echo form_error('email');?></p>
  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php echo set_value("id");?>"><br><?php echo form_error('id');?></p>
    <input type="submit" name="send">

   </form>
   <table class="title">
   <tr>
   <th><i><a href="<?php echo base_url('main/register') ;?>">sign up here  </a></i></th>
   
</tr> 
</table>
<?php if($this->uri->segment(2)== "after_insert"){
        echo "<p> NEW EMPLOYEE ADDED</p>";
        ?><a href="<?php echo base_url('main/index') ?>"> REFRESH</a>
    <?php }?>
    </div>
   
    

