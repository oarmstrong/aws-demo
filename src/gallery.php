<?php

if (isset($_FILES['userfile'])) {
    $uploadfile = '/uploads/'.basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "uploaded";
    } else {
        echo "failed to move";
    }
}

echo "<h1>Gallery!</h1>";

$images = glob('/uploads/*.png');

foreach ($images as $img) {
    ?><img src="<?php echo $img; ?>"><?php
} ?>