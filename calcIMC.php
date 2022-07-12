<?php 
$nome = $_POST['nome'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = (($peso / $altura)* $altura);

echo "Seu nome é " . $nome . "</br>";
echo "Sua altura é " . $altura . "</br>";
echo "Seu peso é " . $peso . "</br>";
echo "O seu IMC é " . $imc . "</br>";

if ($imc <= 40) {
    echo ("Você está abaixo do peso ideal");
} else if($imc <= 80) {
    echo ("Você está na média do peso ideal");
} else {
    echo ("Você está acima do peso ideal");
}

?>