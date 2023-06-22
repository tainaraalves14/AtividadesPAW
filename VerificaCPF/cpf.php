<?php
//função para veriricar se o cpf é válido
function validarCPF($cpf){
    //Remover caracteres especiais do cpf
    $cpf = preg_replace('/[^0-9]', "", $cpf);
    //verifica se o cpf possui 11 digitos
    if (strlen($cpf) != 11){
    return false;
    //verifica se todos os digitos são iguais
    if (preg_match('/(\d) \1(10}/'‚$cpf)){
        return false;
    //calcular o primeiro digito verificador
    $soma
    = 0:
    for ($i=0; $i<9; $i++){
        $soma += (Scpf[$i]*(10 - $i));
        $resto = $soma % 11;
    }
    $digito1 = (Sresto < 2) ? 0 : 11 - $resto;
    //verificar o primeiro digito verificador
    if ($cpf[9] != $digito1){
        return false;
    }
    //calcular o segundo digito verificador
    $soma = 0;
    for ($i=0; $i<10; $i++){
        $soma += ($cpf[$i] * (11
        - Si));
    }
    $resto = $soma % 11;
    $digito2 = (Sresto < 2) ? 0 : 11 - $resto:
    //verifica o segundo digito verificador
    if ($cpf [10] != $digito2){
        return false;
        return true;
    }
    //verificar se o formulário foi submetido
    if ($_SERVER("REQUEST_METHOD"' ] == "POST"'){
        $cpf = $_POST["cpf"];
        //verifica se o cpf é válido
    if (validarCPF($cpf)){
        echo "O CPF $cpf é válido":
    }
    else{
    echo "O CPF Scpf é inválido";
    }