<?php 
ob_start();
	session_start();
	error_reporting(0);
	$dbhost="localhost";
	$dbusername="root";
	$dbpassword="";
    $dbname="program_mng";
	$dblink=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname)or die("Database connection failed!!!");
	if($dblink)
	{	
    mysqli_select_db($dblink,$dbname);
		$MxAlw=25; //Paging limit
		include("functions.php");
     // echo "<script>window.alert('Database connected')</script>";
	} else echo $PgErr="Page you have requested could not be found";
	  $expireAfter = 10;
 
//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];   
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        $CookieInfo = session_get_cookie_params();
   if ( (empty($CookieInfo['domain'])) && (empty($CookieInfo['secure'])) ) {
       setcookie(session_name(), '', time()-3600, $CookieInfo['path']);
   } elseif (empty($CookieInfo['secure'])) {
       setcookie(session_name(), '', time()-3600, $CookieInfo['path'], $CookieInfo['domain']);
   } else {
       setcookie(session_name(), '', time()-3600, $CookieInfo['path'], $CookieInfo['domain'], $CookieInfo['secure']);
   }
   unset($_COOKIE[session_name()]);
   session_destroy();
  //+----------------------------------------DESTROY THE SESSION---------------------------------------------------------*/ 
  header("login.php");
    }
    
}
 
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
?>