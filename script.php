<?php
if(isset($_POST['message']) && !empty($_POST['message'])) {
    if(!empty($_POST['usrname'])) {
        $usrname = $_POST['usrname'];
        $message = $_POST['message'];
        $time = date("Y-m-d h:i:s");
        $text = "<p>" . $usrname . ": " . $message . " at " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
    else{
        $message = $_POST['message'];
        $time = date("Y-m-d h:i:s");
        $text = "<p>" . "Anonymious: " . $message . " at " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
}
else{
    echo "insert text in the message field!";
}
?>
