<?php
    $x = 9;
    $y = 5;
    $media = ($x + $y) / 2;

    // media >= 6,0 = 'aprovado'
    // media < 6,0 & >= 4,0 = 'recuperação'
    // media < 4,0 = 'reprovado'

    if ($media >= 6.0) {
         // se verdade
         echo 'Aluno aprovado';
    } else if ($media >= 4.0) {
        // se verdade
        echo 'Aluno em recuperação';
    } else {
        // se falsa
        echo 'Aluno reprovado';
    }

?>