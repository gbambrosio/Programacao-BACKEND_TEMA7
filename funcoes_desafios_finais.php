<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   if($sexo == "masculino" && $idade == 18){
    return "$nome, Alistamento obrigatório" ;
   } else {
    return " $nome, Facultativo, Dispensado ou Prestado";
   }
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $numeros = array($num1, $num2, $num3);
   rsort($numeros);
   return implode(" , ", $numeros);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   $media = ($nota1 + $nota2 + $nota3) / 3;
   if($media >= 6){
    return "Média, $media, . APROVADO";
   } else {
    return "Média, $media, . REPROVADO";
   }
}
?>