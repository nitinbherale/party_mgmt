<?php
function redirect($pg_name){
 header("location:".$pg_name);
}

function isValidUser()
{
    global $dblink;
    $sess =session_id();
    $query_sel="select * from tbl_adm where ad_sess='".$sess."' and ad_active =0";
   // echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    { 
        return 1;
    }
    else 
    {   
       //echo "Query not cubrid_execute(conn_identifier, SQL)"; 
        return 0;
    }
}

function LgnChk($username,$password)
{
    global $dblink;
    $sess= session_id();
    $md5_pwd= md5($password);
    $query_sel="select * from tbl_adm where ad_usr_nm='".$username."' and ad_pwd='".$md5_pwd."' and ad_active = 0";
  //  echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    {
       //echo "This function get called";
        $row= mysqli_fetch_array($result_sel);
        //echo count($row);
        $adminid =$row["ad_id"];
        $_SESSION['pma_adm_id']=$row["ad_id"];
        $_SESSION['pma_adm_usr_nm']=$row["ad_usr_nm"];
        $_SESSION['pma_adm_usr_type']=$row["ad_type"];
        $query_up="update tbl_adm set ad_sess='".$sess."' where ad_id=".$adminid;
        echo $query_up;
        $result_up=mysqli_query($dblink,$query_up);
        if($result_up)  { echo  $err="";    }
        else { echo $err="Error in updating the admin details.";    }
    }
    else    
    {   
        $err="Invalid Username/Pasword.Please Try Again";   
    }
    return $err;
}

function security($type)
{
    $session_type = $_SESSION['us_type'];
    if($session_type==$type){
    }
    else
    { 
        header("location:logout.php");
    }
}

 function execute_qry($qry){
     global $dblink;
     $queryFinal=$qry;
     //echo "<script>window.alert('executed')</script>";
     $result = mysqli_query($dblink,$queryFinal);
     if ($result) {
        echo "<script>window.alert('success')</script>";
     }
     else
     {
        $msg ="Error".mysqli_error($dblink);
        echo "<script>window.alert('".$msg."')</script>";
     }
 }


function exc_qry($qry)
{
    global $dblink;
    $resultArray=array();
    $queryFinal=$qry;//give the 20 values accronding to min value
    //echo $queryFinal;
    $resultQueryFinal=mysqli_query($dblink,$queryFinal);
    if(mysqli_num_rows($resultQueryFinal)>0)
    {
        while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal))
        {
            array_push($resultArray,$RwGtAlSbmsn);
        }
    }
// echo count($resultArray);
    return array($resultArray);
} 

function send_sms($msg,$mobile_no){
    $authKey = "xk9139XKsu83ae";
    $senderId = "AUTPRO";
    $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";
    $message = urlencode($msg);
    $route = "route=4";
    $contact = $mobile_no;
    $postData = array(
    'authkey' => $authKey,
    'mobiles' => $contact,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
    );
    $url="https://quick.admarksolution.com/vendorsms/pushsms.aspx?clientid=$clientId&apikey=$authKey&msisdn=91$contact&sid=$senderId&msg=$message&fl=0&gwid=2&dc=8";
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    ));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    if(curl_errno($ch))
    {
        $msg = 'error:' . curl_error($ch);
    }
    else
    {
        $msg="success";
    }
    curl_close($ch);
  return $msg;
}



//Event Approve Mail
 function approve_mail($evnt_title,$date,$desciption,$street,$city,$postal_code,$time,$per_nm,$per_phone,$per_email,$evnt_id){

            $headers = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers

            $headers .= 'From: contact@yuvasena.co.in' . "\r\n";

            $subject = $title.' Event Confirmed';

            $message1 = "<html><body>";

            $message1 .= "<div class='mail-content'>";

            $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";

            $message1 .= "<tr><td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";

           

            $message1 .= "<tr style='padding-bottom:20px;'> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/> We accept with pleasure, the kind invitation of Program.

            <td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Program Details : </b>".$description."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$street.", ".$city.", ".$postal_code."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Person of Contact : </b>".$per_nm." - ".$per_phone." </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>This is to confirm the presence of Hon.  Aaditya ji Thackeray. <br> We look forward to the program

<br> Thank You </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 26px;font-size: 15px; padding-top: 5px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";

            $message1 .= "</table>";

            $message1 .= "</div>";

            $message1 .= "</body></html>";



//echo $message1;

        $text = $message1;


        if(strlen($per_email)>0){
        mail($email,$subject,$text,$headers);


        }
            $authKey = "xk9139XKsu83ae";

            $senderId = "AUTPRO";

            $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";

            $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');

            $message = urlencode('We accept with pleasure, the kind invitation of Program. For More details please click on below link '.$short);

            $route = "route=4";

            $postData = array(

            'authkey' => $authKey,

            'mobiles' => $contact,

            'message' => $message,

            'sender' => $senderId,

            'route' => $route

            );

            $url="https://quick.admarksolution.com/vendorsms/pushsms.aspx?clientid=$clientId&apikey=$authKey&msisdn=91$per_phone&sid=$senderId&msg=$message&fl=0&gwid=2&dc=8";

            $ch = curl_init();

            curl_setopt_array($ch, array(

            CURLOPT_URL => $url,

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_POST => true,

            CURLOPT_POSTFIELDS => $postData

            ));

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $output = curl_exec($ch);

             if(curl_errno($ch)){

                $err = 'message not send';

             }  

              curl_close($ch);

}

//End Approve 


?>