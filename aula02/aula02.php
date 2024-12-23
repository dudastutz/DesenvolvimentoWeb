<?php
$formulario = array(
    'id'=>'formCadastro',
    'tipo_submit'=>'POST', 
    'url_submit'=>'cadastro.php', 
    'itens'=> array(
        'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),
        'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),
        'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),
        'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false),
        'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> 'Informe a cidade que você nasceu.'),
        'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros")),
        'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
        'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
        'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
    )

    
);
function geraOptions($options){
    $opcoes = '';
    foreach($options as $chave => $valor){
        $opcoes += "<option value='" . $chave . "'>". $valor ."</option>";
    }
    return $opcoes;
}
function geraInputTextNumber($elForm, $chave){
    return "<label for = '".$elForm['nome']."'> '".$elForm['label']."'</label>
        <input id= '".$chave."' type = '".$elForm['tipo']."' placeholder = '".$elForm['placeholder']."' name = '".$elForm['nome']."'/>"; 
};

function geraInputTextArea($elForm, $chave){
    return "<label for = '".$elForm['nome']."'> '".$elForm['label']."'</label> <textarea id = '".$chave."'placeholder='".$elForm['placeholder']."'name='".$elForm['nome']."'>". $elForm['valor_padrao']. "</textarea> " ;
};

function geraInputResetSubmitButton($elForm, $chave){
    return "<button id=' " . $chave ."' type= '". $elForm['tipo'] ."' name='" . $elForm['nome'] . "'>". $elForm['label'] ."</button>";
}


function geraInputSelect($elForm, $chave){
    return '<select '. "name='". $elForm['nome'] . "' id='". $chave . "'required>". geraOptions($elForm['opcoes']) ."</select>";
}

function geraCheckboxRadio($elForm, $chave){
    $opcoes = '';
    echo  "<label>".$elForm['label']."</label>";
        foreach($elForm['opcoes'] as $chave => $valor ){
            $opcoes .= "<input type = ><label></label>";
        }
    return $opcoes;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
    
</body>
</html>