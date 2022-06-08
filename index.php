<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Calculo_tempo_duas_datas_PHP</title>
</head>
<body>
    
         <h2>Calculo de tempo entre duas datas</h2>
    
    <?php
     $entrada = new Datetime("2020-03-01 09:00:00");
    // $result1 = $entrada->format('Y-m-d-H-i-s');
     $saida = new Datetime("2022-05-30 17:00:00");
     //$result2 = $saida->format('Y-m-d-H-i-s');
     
     $intervalo = $entrada->diff($saida);
     //var_dump($intervalo);

     echo "Entrada: " . $entrada->format("Y/m/d H:i:s"). "<br>" ;
     echo "Saída: " . $saida->format("Y/m/d H:i:s"). "<br><br>" ;

     //Obter o intervalo entre as datas

     echo  $intervalo->y . " ano(s) " .$intervalo->m . " mês/meses " .$intervalo->d . " dia(s) <br>";
     echo  $intervalo->d . " dias <br> <br>";

     $entrada2 = new Datetime("2022-05-30 09:00:00");

      $saida2 = new Datetime("2022-05-30 17:00:00");
    
      //var_dump($intervalo);
 
      echo "Entrada: " . $entrada2->format("Y/m/d H:i:s"). "<br> " ;
      echo "Saída: " . $saida2->format("Y/m/d H:i:s"). "<br><br>" ;

    
     //Obter o intervalo em dias

     //echo "<br> " . $intervalo->d . " dias <br> <br>";

     //Obter o intervalo em segundos

     echo $saida2->getTimeStamp() - $entrada2->getTimeStamp() . " segundo(s) <br>";
 
     //Obter o intervalo em minutos

     echo ($saida2->getTimeStamp() - $entrada2->getTimeStamp()) / 60 . " minuto(s) <br>";

     
     //Obter o intervalo em horas

     echo (($saida2->getTimeStamp() - $entrada2->getTimeStamp()) / 60) /60 . " hora(s) <br>";

    ?>
</body>
</html>