<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
<form enctype="multipart/form-data" action="frmReceiveFile.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este archivo: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
</body>
</html>
