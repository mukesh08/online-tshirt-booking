<?php


include 'connection.php';
$sql ="insert into customer(first_name,last_name,street_address,city,house_no,tel_no,mob_no,email,tshirt_code,tshirt_size,tshirt_color,no_of_tshirt)
VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[street_address]','$_POST[city]','$_POST[house_no]','$_POST[tel_no]',
'$_POST[mob_no]','$_POST[email]','$_POST[tshirt_code]','$_POST[tshirt_size]','$_POST[tshirt_color]','$_POST[no_of_tshirt]')";
 if(!mysql_query($sql,$con))
 {
     die ("Error".mysql_error());
 }
header('location:index.php');
mysql_close($con);
?>