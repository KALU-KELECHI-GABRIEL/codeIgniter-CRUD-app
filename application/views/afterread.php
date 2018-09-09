

<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="title"><H1>RECORD VIEWING PAGE</H1>
    <form action="<?php echo base_url('main/read_form_handler')?>" method="post"><br>

 

  <p> EMPLOYEE ID NUMBER ENTERED: <input type="text" name="id" value="<?php echo set_value("id");?>"><br><?php echo form_error('id','<p>oga !, just enter the id number nawa o!</p>');?></p>
  
   
<?php 
if($this->uri->segment(2) == "read_form_handler"){?>
 </form>

        <p> EMPLOYEE DETAILS</p>
    <p>you entered this!!</p>
            <table class="title">
            <tr>
            <th><p>NAME</p></th>
            <th> <p>EMPLOYEE ID</p></th>
            <th><p> SPECIALTY </p></th>
            <th><p> PHONE NUMBER</p></th>
            <th><p> EMAIL </p></th>
            </tr>
           
    <?php  
    //if($data->num_rows() > 0){
          foreach($read_data as $key => $data){
                ?>
                <tr>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['specialty'];?></td>
                <td><?php echo $data['phone_num'];?></td>
                <td><?php echo $data['email'];?></td>
                </tr>
          <?php }
    //}
    //else{echo "no match found in database";}
    
    
        }?>
     </table>
     <form action="<?php echo base_url('main/updater')?>" method="post">
   STILL WISH TO UPDATE : <input type="submit" value="UPDATE">
   </form>
   <a href="<?php echo base_url('main/index3') ?>"> BACK TO HOME</a>
    </div>
