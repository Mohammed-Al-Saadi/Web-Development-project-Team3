<?php

//target_dir is the location where you want your files to be uploaded

$dest = "folder/".basename($_FILES["userfile"] ["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($dest,PATHINFO_EXTENSION));


if ($_FILES["userfile"]["size"] > 	2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only image files are allowed.";
  $uploadOk = 0;
}
if (move_uploaded_file($_FILES["userfile"] ["tmp_name"], $dest)){

echo "The file has been successfully uploaded. <br>";
echo "<a href='folder/'> Click to see list of files </a>";
}
else "Unable to upload file";
?>