
<?php
// En versiones de PHP anteriores a 4.1.0, $HTTP_POST_FILES debe utilizarse en lugar
// de $_FILES.

$uploaddir = '';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "El archivo es v�lido y fue cargado exitosamente.\n";
} else {
    echo "�Posible ataque de carga de archivos!\n";
}

echo 'Aqu� hay m�s informaci�n de depurado:';
print_r($_FILES);

print "</pre>";

?>
