<?php

$idade = 21;
$numeroDePessoas = 1;

echo "Você só pode entrar caso seja maior de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18) {
   echo "Você tem $idade anos." . PHP_EOL;
   echo "Pode entrar sozinho.";
} else if($idade >= 16 and $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompannhado(a), então pode entrar";
} else {
    echo "Você só tem $idade, você não pode entrar";
};

echo  PHP_EOL;
echo "Adeus!";