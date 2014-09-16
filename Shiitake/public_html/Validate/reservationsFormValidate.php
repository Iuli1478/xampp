<?php
$validPhone = FALSE;
$validTime = FALSE;
if ($_POST['name'] != "") {
    $validName = TRUE;
}  else {
    $validName = FALSE;
}
if ($_POST['family'] != "") {
    $validFamily = TRUE;
} else{
    $validFamily = FALSE;
}
if ($_POST['phone'] != "") {
    if(preg_match("/^[0-9\-\ \+]{9,15}$/", $_POST['phone'])) {
         $validPhone = TRUE;
    }
} 
if ($_POST['time'] != "") {
    if(preg_match("/^[0-9\:\;\ \+]{5}$/", $_POST['time'])) {
         $validTime = TRUE;
    }
} 
if ($validName == TRUE && $validFamily == TRUE && $validPhone == TRUE && $validTime == TRUE) {
    $to      = 'shiitakebg.com';
    $subject = 'Резервация';
    $message = 'Име: '. $_POST['name'] . "\r\n" .'Фамилия: ' . $_POST['family']. "\r\n" .
               'Телефонен номер: ' . $_POST['phone'] . "\r\n" . 'Дата: ' . $_POST['data'] . 
                "\r\n" . 'Час: '. $_POST['time'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
