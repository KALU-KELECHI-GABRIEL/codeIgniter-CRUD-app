

<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="title"><H1>RECORD VIEWING PAGE</H1>
    <form action="<?php echo base_url('main/read_form_handler')?>" method="post"><br>

  <P>Please enter the ID of the Employee whose records are to be viewed (FOR POSSIBLE UPDATING)</P>

  <p> EMPLOYEE ID NUMBER: <input type="text" name="id" value="<?php echo set_value("id");?>"><br><?php echo form_error('id','<p>oga !, just enter the id number nawa o!</p>');?></p>
  
   click to submit: <input type="submit" name="send">
   </form>
<?php 
if($this->uri->segment(2) == "after_read"){?>


        <p> EMPLOYEE DETAILS</p>
    <p>you entered this!!</p>
            <table>
            <tr>
            <th><p>NAME</p></th>
            <th> <p>EMPLOYEE ID</p></th>
            <th><p> SPECIALTY </p></th>
            <th><p> PHONE NUMBER</p></th>
            <th><p> EMAIL </p></th>
            </tr>
           
    <?php  
    if($returner->num_rows() > 0){
          foreach($fetch_data>result() as $row){
                ?>
                <tr>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->specialty;?></td>
                <td><?php echo $row->phone_num;?></td>
                <td><?php echo $row->email;?></td>
                </tr>
          <?php }
    }
    else{echo "no match found in database";}
    
    
        }?>
     </table>
    </div>
