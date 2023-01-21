<?php
$date = date("d-m-Y");
$new_file_name = "copy-" . $date . ".html";
if(copy("index.html", $new_file_name)) {
} else {
}
if(isset($_POST['message']) && !empty($_POST['message'])) {
    if(!empty($_POST['usrname'])) {
        $usrname = $_POST['usrname'];
        $message = $_POST['message'];
        $time = date("Y-m-d h:i:s");
        $text = "<p>" . $usrname . ": " . $message . " v čase " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
    else{
        $message = $_POST['message'];
        $time = date("Y-m-d h:i:s");
        $text = "<p>" . "Anonymious: " . $message . " v čase " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
}
else{
    echo "Zpráva je prázdná!";
}
?>
