<?php
$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else{
    echo "Você é menor de idade.";
}
?>
<hr>
<?php
/*
verde -    Siga
amarelo -  Atenção
vermelho - Pare
*/
$semaforo="vermelho";
if($semaforo == "verde") echo "Siga";
elseif($semaforo == "amarelo") echo "Atenção";
elseif($semaforo == "vermelho") echo "Pare";
else echo "Cor desconhecida";
//Criar um código switch case, 
//com base no código acima
echo "<hr>";
switch ($semaforo){
    case "verde":
        echo "Siga";
        break;
    case "amarelo":
        echo "Atenção";
        break;
    case "vermelho":
        echo "Pare";
        break;
    default:
        echo "Cor desconhecida";
}
?>
<hr>
<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo "<hr>";
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");
?>
<hr>
<?php
$nome="u";
echo "nome = $nome";
echo "<br>MD5 = ".md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>Hash = $hash";
?>

