
<?php

if (isset($_POST["email"])) {
  $emailcontacto = $_POST["email"];
}

// Varios destinatarios
$para  = 'elenamatasdesign@gmail.com';

// título
$titulo = 'Alguien se ha apuntado a tu newsletter';

// mensaje
$mensaje = "
<html>
<head>
  <title>Alguien se ha apuntado a tu newsletter</title>
</head>
<body>
  <p>Contacto:</p>
  <table>
    <tr>
      <td>$emailcontacto</td>
    </tr>
  </table>
</body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Elena <elenamatasdesign@gmail.com>' . "\r\n";
$cabeceras .= 'From: Newsletter <info@elenamatas.es>' . "\r\n";

// Por si queréis ponerle copia y copia oculta
// $cabeceras .= 'Cc: eduardo@extendedgame.com' . "\r\n";
// $cabeceras .= 'Bcc: eduardo@extendedgame.com' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);

header("Location: https://vimeo.com/216308746");
?>
