
<?php
$email = $_POST['my_email'];
$password = $_POST['pass'];
echo 'hi your email is :' .   $email . 'and your password is : ' . $password;
$data = array("email"=>$email,'data_password'=>$password);
$jdata = json_encode($data);
$f = fopen('info.json', 'w');
fwrite($f, $jdata);
fclose($f)
?>