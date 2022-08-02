<?php
$src = $_FILES['video']['tmp_name'];
$filename = $_FILES['video']['name'];
$output_dir = "uploads/".$filename.".webm";

if (move_uploaded_file($src, $output_dir )) {
        echo "Success! Webm Video uploaded! File: ".$filename;
} else{
    echo "Error! Webm Video failed! File: ".$filename;
};
echo "<br>";
?>