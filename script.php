<?php
$date = date("d-m-Y_h_i");
$new_file_name = "copy-" . $date . ".html";
if(copy("index.html", $new_file_name)) {
} else {
}
if(isset($_POST['message']) && !empty($_POST['message'])) {
    echo "Ukládání...";
    if($_POST['usrname'] !== "") {
        $usrname = $_POST['usrname'];
        $message = $_POST['message'];
        $time = date("Y-m-d");
        $text = "<p>" . $usrname . ": " . $message . " v čase " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
    else{
        $message = $_POST['message'];
        $time = date("Y-m-d");
        $text = "<p>" . "Anonymious: " . $message . " v čase " . $time . "</p>";
        file_put_contents("index.html", $text, FILE_APPEND);
    }
    echo " Hotovo";
}
else{
    echo "Zpráva je prázdná!";
}
?>
