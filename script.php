<?php
if(isset($_POST['message']) && !empty($_POST['message'])) {
    $usrname = $_POST['usrname'];
    $message = $_POST['message'];
    $time = date("Y-m-d h:i:s");
    $text = $usrname . ":" . $message . " at " . $time . "<br>";
    $file = fopen("index.html", "a") or die("Unable to open file!");
    fwrite($file, $text);
    fclose($file);
}
else{
    echo "insert text in the message field!";
}
?>
