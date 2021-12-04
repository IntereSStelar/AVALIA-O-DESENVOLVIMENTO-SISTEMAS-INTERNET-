<table border="1">
    <?php
    
    // contador do numero de linhas (row)
    $row = 1;
    
    // Abre (open) o arquivo (file) "CandidatosPorBairro.csv", para leitura (read)
    $f = fopen("CandidatosPorBairro.csv", "r");
    
    // fopen retorna FALSE quando não consegue abrir o arquivo
    // Teste para ver se $f (o arquivo aberto) é diferente ( !== ) de FALSE
     if ($f !== FALSE) {
        // Consegui entrar logo consegui abrir o arquivo
    
        // Le uma linha ($data) do arquivo $f, com no máximo 1000 linhas valores estão
        // separados por virgula ","
        $data = fgetcsv($f, 1000, ",");
            // Aqui eu li a primeira linha do arquivo
    
            while ($data !== FALSE) {
                // Consegui entrar!! Logo foi lida uma linha e colocada na variável data
                 echo "<tr>";
                // para cada elemento do array $data, repita e armazene este elemento na variável valor
                    foreach($data as $valor) {
                        if($row == 1) {
                            echo "<th>$valor</th>";
                        } else {
                            echo "<td>$valor</td>";
                    }
                }
                echo "</tr>";
                $data = fgetcsv($f, 1000, ",");  
                $row++; // Incrementa (soma 1) ao valor do contador
                // Aqui eu li a proxima do arquivo  
            }
    
            // quando acabar de usar o arquivo ($f) tem que fechar (close).    
            fclose($f);
        }
    
    ?>