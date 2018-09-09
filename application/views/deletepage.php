

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STAFF REMOVAL FORM</title>
    <style>
    
    </style>
</head>
<body>
<h2>please try and view the employees records first before deleting them kindly <a href="<?php echo base_url('main/index3') ?>"> GO TO HOME</a></h2>
<?php // echo "right here"; ?>

<div class="title"><H1>RECORD DELETION PAGE</H1>
    <form action="<?php echo base_url('main/delete_form_handler')?>" method="post"><br>

  <P>Please enter the ID of the Employee whose records are to be removed</P>

  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php echo set_value("id");?>"><br><?php echo form_error('id');?></p>
  
   click to submit: <input type="submit" name="send">

    </form>
    </div>
</body>
</html>