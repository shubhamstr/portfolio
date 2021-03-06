<?php

if (isset($_POST['submit_form'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $url = $_POST['url'];
    $date = date('m/d/Y h:i:s a', time());
    // call to function
    wh_log($date . " --- " . $name . " ---- " . $email . " --- " . $msg);
    header("location: $url?contact=success");
}

function wh_log($log_msg)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename . '/log_' . date('d-M-Y') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}
