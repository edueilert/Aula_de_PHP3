<?php 
$nome = $_POST['nome'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = ($peso / ($altura* $altura));

echo "Seu nome é " . $nome . "</br>";
echo "Sua altura é " . $altura . "</br>";
echo "Seu peso é " . $peso . "</br>";
echo "O seu IMC é " . $imc . "</br>";

if ($imc < 18.5){
    echo "Você está abaixo do peso!";

} elseif ($imc <= 24.9){
    echo "Peso normal";

} elseif ($imc <= 29.9){
    echo "Sobrepeso";

} elseif ($imc <= 34.9){

    echo "Grau l";

} elseif ($imc <= 39.9){

    echo "Grau 2";

} elseif ($imc <= 1000) {
    echo "Grau 3";
    
} else {
    echo "Favor, preencher corretamente o formulário!";
}
    header("refresh:5;url=index.html");
?>