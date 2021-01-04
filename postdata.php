<?php

include_once('db.php');

if(isset($_POST['filefrom']))
{


    if($_POST['filefrom']=='CUSTOMER_NEED')
    {
        $tym=$_POST['sales_time'];
        $name=$_POST['cust_name'];
        $phonenumber=$_POST['phone_number'];
        $requirement=$_POST['cust_requirement'];
         
        $t= date_create_from_format('d/m/Y h:i A', $tym); 
        $fdate = date ("Y-m-d H:i", $t->getTimestamp()); 
        
        $sql="INSERT INTO `messenger`(`id`, `name`, `phone_number`, `requirement`, `date`, `timestamp`) VALUES (NULL, '$name','$phonenumber','$name','$requirement','$fdate',NULL);";
        $res=$con->query($sql);
        echo $sql;
    }
    


}
$con->close();



?>