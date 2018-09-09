<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <div>
        <p>you entered this!!</p>
            <table>
            <tr>
            <thead>NAME</thead>
            <thead> EMPLOYEE ID</thead>
            <thead> SPECIALTY</thead>
            <thead> PHONE NUMBER</thead>
            <thead> EMAIL</thead>
            </tr>
            
            </table>
             
            </div>
        ";
        echo '<table>
        <tr>
        <td>you wish to delete: <form action="" method="post"> <input type="submit" value="delete"></form></td>
        <td><p>you wish to update: </p><form action="" method="post"> <input type="submit" value="update"></form></td>
        </tr>
        </table>';
        <?php 
        if($read_data->num_rows()>0){
            foreach($read_data->result() as $row){
                ?>
                <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->specialty; ?></td>
                <td><?php echo $row->phone_num; ?></td>
                <td><?php echo $row->email; ?></td>
                </tr>
                
                <?php
            }
        }
            else{?>
            <tr>
            <td colspan="5"> nothing</td>
            </tr>
            <?php }
        ?>

        


    
    
</body>
</html>