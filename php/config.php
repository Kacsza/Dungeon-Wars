<?
    // Dane do logowania
    $serwer = 'localhost';
    $konto = 'root';
    $haslo = '';
    $baza = 'klan';


    // Połączenie 
    $polaczenie = mysqli_connect($serwer, $konto, $haslo, $baza);

    // Sprawdzenie połączenia
    if (!$polaczenie) {
        die("Połączenie nieudane: " . mysqli_connect_error());
    }
