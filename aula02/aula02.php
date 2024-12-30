<?php
$formulario = array(
    'id' => 'formCadastro',
    'tipo_submit' => 'POST',
    'url_submit' => 'cadastro.php',
    'itens' => array(
        'nome' => array('tipo' => 'text', 'nome' => 'nome', 'label' => 'Nome', 'placeholder' => 'Informe seu nome.'),
        'idade' => array('tipo' => 'number', 'nome' => 'idade', 'label' => 'Idade', 'placeholder' => 'Informe sua idade.'),
        'sexo' => array('tipo' => 'radio', 'nome' => 'sexo', 'label' => 'Sexo', 'opcoes' => array("M" => "Masculino", "F" => "Feminino", "O" => "Outros")),
        'esporte_preferido' => array('tipo' => 'checkbox', 'nome' => 'esporte_preferido', 'label' => 'Esporte Preferido', 'opcoes' => array("F" => "Futebol", "V" => "Vôlei", "N" => "Natação", "O" => "Outros")),
        'cidade_nascimento' => array('tipo' => 'text', 'nome' => 'cidade', 'label' => 'Cidade de Nascimento', 'placeholder' => 'Informe a cidade que você nasceu.'),
        'estado_nascimento' => array('tipo' => 'select', 'nome' => 'estado_nascimento', 'label' => 'Estado de Nascimento', 'opcoes' => array("RJ" => "Rio de Janeiro", "SP" => "São Paulo", "ES" => "Espírito Santo", "MG" => "Minas Gerais", "O" => "Outros")),
        'cpf' => array('tipo' => 'number', 'nome' => 'cpf', 'label' => 'CPF', 'placeholder' => 'Informe seu CPF.'),
        'botao_enviar' => array('tipo' => 'submit', 'nome' => 'enviar', 'label' => 'Enviar'),
        'botao_limpar_form' => array('tipo' => 'reset', 'nome' => 'reset', 'label' => 'Limpar Formulário'),
    )
);

function geraOptions($options)
{
    $opcoes = '';
    foreach ($options as $chave => $valor) {
        $opcoes .= "<option value='" . $chave . "'>" . $valor . "</option>";
    }
    return $opcoes;
}

function geraInputTextNumber($elForm, $chave)
{
    return "<div><label for='" . $chave . "'>" . $elForm['label'] . "</label>
        <input id='" . $chave . "' type='" . $elForm['tipo'] . "' placeholder='" . $elForm['placeholder'] . "' name='" . $elForm['nome'] . "'></div>";
}

function geraCheckboxRadio($elForm, $chave)
{
    $opcoes = "<div><label>" . $elForm['label'] . "</label><br>";
    foreach ($elForm['opcoes'] as $key => $valor) {
        $opcoes .= "<input type='" . $elForm['tipo'] . "' id='" . $chave . "_" . $key . "' name='" . $elForm['nome'] . ($elForm['tipo'] === 'checkbox' ? "[]" : "") . "' value='" . $key . "'>";
        $opcoes .= "<label for='" . $chave . "_" . $key . "'>" . $valor . "</label><br>";
    }
    $opcoes .= "</div>";
    return $opcoes;
}

function geraInputSelect($elForm, $chave)
{
    return "<div><label for='" . $chave . "'>" . $elForm['label'] . "</label>
        <select name='" . $elForm['nome'] . "' id='" . $chave . "' required>" . geraOptions($elForm['opcoes']) . "</select></div>";
}

function geraInputResetSubmitButton($elForm, $chave)
{
    return "<button id='" . $chave . "' type='" . $elForm['tipo'] . "' name='" . $elForm['nome'] . "'>" . $elForm['label'] . "</button>";
}

function geraFormulario($formulario)
{
    $html = "<form id='" . $formulario['id'] . "' method='" . $formulario['tipo_submit'] . "' action='" . $formulario['url_submit'] . "'>";

    foreach ($formulario['itens'] as $chave => $elForm) {
        switch ($elForm['tipo']) {
            case 'text':
            case 'number':
                $html .= geraInputTextNumber($elForm, $chave);
                break;
            case 'radio':
            case 'checkbox':
                $html .= geraCheckboxRadio($elForm, $chave);
                break;
            case 'select':
                $html .= geraInputSelect($elForm, $chave);
                break;
            case 'submit':
            case 'reset':
                $html .= geraInputResetSubmitButton($elForm, $chave);
                break;
        }
    }

    $html .= '</form>';
    return $html;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?= geraFormulario($formulario) ?>
</body>
</html>
