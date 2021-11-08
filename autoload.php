<?php
spl_autoload_register(function(string $nomeCompletoDaClasse){
//    echo $nomeCompletoDaClasse . ' - ';
    $caminhoArquivo = str_replace('Rvinfo\\Banco','src',$nomeCompletoDaClasse);
//    echo $caminhoArquivo . PHP_EOL;
    $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoArquivo);
//    echo $caminhoArquivo . PHP_EOL;
    $caminhoArquivo .= '.php';
//    echo $caminhoArquivo . PHP_EOL;

    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
//    echo $caminhoArquivo . PHP_EOL;
});