<?php
echo "CLIENTE:<br/>";
echo $_SERVER["REMOTE_ADDR"]."<br/>";  //Imprime la direcci�n IP del cliente
echo $_SERVER['HTTP_USER_AGENT']."<br/>"; /*Imprime la informaci�n de S.O y navegador del cliente*/
echo $_SERVER["REMOTE_PORT"]."<br/>"; //Imprime el puerto del cliente
echo "<script> document.write(window.innerWidth+'x'+window.innerHeight); </script><br/><br/>"; //Imprime tama�o de pantalla

echo "SERVIDOR:<br/>";
echo $_SERVER['SERVER_ADDR']."<br/>"; //Imprime la IP del servidor
echo $_SERVER['SERVER_NAME']."<br/>"; //Imprime el nombre del servidor
echo $_SERVER['SERVER_SOFTWARE']."<br/>"; //Imprime el software que usa el servidor
echo $_SERVER['SERVER_PROTOCOL']."<br/>"; //Imprime el protocolo usado
echo $_SERVER['REQUEST_METHOD']."<br/>"; //Imprime el m�todo de petici�n empleado
echo $_SERVER['REQUEST_TIME']."<br/>";  //Imprime el tiempo de respuesta
?>
