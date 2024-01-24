<!-- SOAL -->

<!-- Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. -->

<?php 

function even_or_odd(int $n): string {
    $hasil = '';

    if($n % 2 == 0) {
        $hasil = 'Even';
    } else {
        $hasil = 'Odd';
    }

    return $hasil;
}

echo even_or_odd(2);