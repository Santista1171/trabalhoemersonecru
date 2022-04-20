<?php
    $pos = $_GET['pos'];
    $pos2 = $pos+1;
    $pos3 = $pos2+1;
    $cor = $_POST['cor'];
    $numero = $_POST['numero'];
    $quantidade = $_POST['quantidade'];
    $arquivo = fopen("dados.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";",$linha);
    fclose($arquivo);
    $dados[$pos] = $cor;
    $dados[$pos2] = $numero;
    $dados[$pos3] = $quantidade;
    $array = array_filter($dados);
    $file = 'dados.txt';
    unlink($file);
    $arq = fopen("dados.txt","w");
    if($arq == false) die('Não foi possível criar o arquivo');
    foreach($array as $item){
        $arquivo = 'dados.txt';
        $texto = $item.";";
        $file = fopen($arquivo,'a');
        fwrite($file,$texto);
    }
    fclose($arq);
    header("location: index.php");
?>