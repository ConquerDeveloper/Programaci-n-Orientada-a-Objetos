<!DOCTYPE html>
<html>
<head>
    <title>Metodos estaticos</title>
</head>
<body>
<?php
class Cadena {
    public static function fetch() {
        echo date("d-m-y");
    }
    public static function corta($palabra, $num) {
        $largo = strlen($palabra);
        $cadena = substr($palabra, 0, $num);
        return $cadena;
    }
}
//echo Cadena::fetch();
echo Cadena::corta("hola", 4);
?>
</body>
</html>