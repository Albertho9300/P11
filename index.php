<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de WebService con PHP7 Consulta Total de Contactos</title>
    </head>
    <body>
        <h1>Consulta Total de Contactos usando WebService con PHP7 </h1>
        <?php
        include 'client.php';
         $client = new client;
         $param_array = array('np'=>'0');
         var_dump($param_array); 
         $contactos=$client->getContacts($param_array); 
         $nfilas=$client->getNumContacts($param_array);
        print "<p>nfilas: ".$nfilas."</p>";
       if ($nfilas>0)
      {
         print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>email</TH>\n");
         print ("<TH>mensaje</TH>\n");
         print ("</TR>\n");
  
           for ($i=0;$i<$nfilas;$i++) {       
           $resultado = $contactos[$i];
            print ("<TD>" . $resultado['nombre'] . "</TD>\n");
            print ("<TD>" . $resultado['email'] . "</TD>\n");
            print ("<TD>" . $resultado['mensaje'] . "</TD>\n");

            print ("</TR>\n");
         }

         print ("</TABLE>\n");
      }
      else
         print ("<p>No hay Contactos disponibles</p>");
  ?>
       <p>Bye</p>
    </body>
</html>
