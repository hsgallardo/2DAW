<?php
if(move_uploaded_file($_FILES['archivo']['tmp_name'], 'imagenes/' .$_FILES['archivo']['name'])){
    echo 'Archivo subido correctamente';
}else{
    echo 'Error en la subida de los archivos';
}

?>