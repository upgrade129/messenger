<?php error_reporting(E_ALL);

include_once('db.php');

if(isset($_POST['getdata']))
{
    if($_POST['getdata']=='CUSTOMER_NEED')
    {
        $tbody='';
        $sql="SELECT * from `messenger` WHERE `cust_id` like '$patid' ORDER BY `timestamp` DESC";
        
        $data=$con->query($sql);
        while($r=mysqli_fetch_array($data))
        {
            $tbody.='<tr> 
            <td >'.$r["name"].'</td>
            <td>'.$r["phonenumber"].'</td>
            <td>'.$r["requirement"].'</td>  
            <td>'.date ("d/m/Y", strtotime($r["date_time"])).'</td>      
        </tr>';
        }   
        echo $tbody;
        
    }



}






?>s