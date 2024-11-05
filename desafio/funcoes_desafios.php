<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) { 
   $nome = $_POST['nome'];
   $sexo = $_POST['sexo'];
   $idade = $_POST['idade'];
   
   if ($sexo == "feminino" && $idade < 25 && $idade > 0){
      echo "ACEITO";
   }
   else{
      echo "NÃO ACEITO";
   }
   
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $numeros = array ($num1, $num2, $num3);
   rsort ($numeros);
   return implode (", ", $numeros);
   
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   $nota1 = $_POST['nota1'];
   $nota2 = $_POST['nota2'];
   $nota3 = $_POST['nota3'];
    
   $media = ($nota1 + $nota2 + $nota3)/3;

   if ($media >= 7){
      echo "APROVADO";
   }
   else{
      echo "REPROVADO";
   }
 
}
?>
