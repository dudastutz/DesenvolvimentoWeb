<?php
$dadosFuncionarios = array(
    array('nome'=> 'João', 'idade'=>23, 'cidade'=>'nova friburgo'),
    array('nome'=> 'José', 'idade'=>25, 'cidade'=>'nova friburgo'),
    array('nome'=> 'Maria', 'idade'=>22, 'cidade'=>'nova friburgo')
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Função para criar as linhas da tabela
$dados = function($dadosFuncionarios){
    $retorno = "";
    foreach ($dadosFuncionarios as $chave => $valor) {
        $retorno .= "<tr>";
        $retorno .= "<td>" . $valor['nome'] . "</td>";
        $retorno .= "<td>" . $valor['idade'] . "</td>";
        $retorno .= "<td>" . $valor['cidade'] . "</td>";
        $retorno .= "</tr>";
    }
    return $retorno;
};

// Função para montar a tabela completa
$montaTabela = function($dados){
    $retorno = "<table border='1' style='border-collapse: collapse;'>";
    $retorno .= "<tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
    $retorno .= $dados;
    $retorno .= "</table>";
    return $retorno;
};

// Gerar e exibir a tabela
$linhasTabela = $dados($dadosFuncionarios);
echo $montaTabela($linhasTabela);
?>
</body>
</html>
