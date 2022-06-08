<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
   
    <title>calculartempo</title>
</head>
<body>
    
         <h2>Calculo de tempo entre duas datas</h2>
    
    <?php
     $entrada = new Datetime("2021-05-30 09:00:00");
     $saida = new Datetime("2022-30-05 17:00:00");
     
     
     $intervalo = $entrada ->diff($saida);
     var_dump($intervalo);

     echo $intervalo-> y . "anos";

    ?>
</body>
</html>