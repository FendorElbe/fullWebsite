<?php
// In PHP kleiner als 4.1.0 sollten Sie $HTTP_POST_FILES anstatt
// $_FILES verwenden.

$uploaddir = '/testupload/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
echo $_FILES['userfile']['tmp_name'];
try {
  move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
} catch (Exception $e) {
    echo 'Exception abgefangen: ',  $e->getMessage(), "\n";
}

echo 'Weitere Debugging Informationen:';
print_r($_FILES);

print "</pre>";

?>
