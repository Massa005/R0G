<?php
    $targetPath = "../sources/".basename($_FILES["inpFile"]["name"]);
    move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);





?>