<?php

$idade = 21;

echo "Você só pode entrar caso seja maior de 18 anos." . PHP_EOL;

if($idade >= 18) {
   echo "Você tem $idade anos." . PHP_EOL;
   echo "Pode entrar.";
} else {
    echo "Você só tem $idade, você não pode entrar";
};

echo  PHP_EOL;
echo "Adeus!";


# Operadores lógicos and, or