<?php
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
if(empty($_POST['php_mail'])){
	//echo"no email address found";
	echo "retval=0";
	exit;
}
$senderName		= $_POST['php_name'];
$senderEmail	= $_POST['php_mail'];
$senderMsg		= nl2br($_POST['php_message']);
$sitename		= "http://yourwebsite.com";
$to 			= "youremail@gmail.com";
$ToName 		= "yourname";
$date 			= date("m/d/Y H:i:s");
$ToSubject 		="Message from $sitename";
$comments 		= $msgPost;
$EmailBody 		= "A visitor to $sitename has left the following information<br />
              	Sent By: $senderName, Email : $senderEmail
			 	<br /><br />
				Message Sent:
			  	<br />$senderMsg<br />";  
$EmailFooter	= "<br />Sent: $date<br /><br />";
$Message 		= $EmailBody.$EmailFooter;
$ok = @mail($to, $ToSubject, $Message, $headers . "From:$senderName");
if($ok){
	echo "retval=1";
}else{
	echo "retval=0";
}

?>