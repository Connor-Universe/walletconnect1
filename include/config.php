<?php 

 $connect = mysqli_connect("localhost","root","","walletconnect");
 #$connect = mysqli_connect("	sql100.epizy.com","epiz_28901830","6RrjeTalzvYpln0","epiz_28901830_wallet");
 $get_settings1 = "select * from settings";
$run_settings1 = mysqli_query($connect,$get_settings1);
$row_settings1 = mysqli_fetch_array($run_settings1);
$email_admin1 = $row_settings1['email'];
$password_admin1 = $row_settings1['password'];
$chat = $row_settings1['smartupps'];
$site_name3 = $row_settings1['site_name'];
$location123 = $row_settings1['location2'];
$site_link123 = $row_settings1['site_link'];
$phone123 = $row_settings1['phone'];

?>