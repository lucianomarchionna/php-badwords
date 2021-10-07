<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum a consectetur fugiat iusto necessitatibus eaque, aliquam sed eveniet iure facere ipsam amet suscipit possimus aliquid? Molestias numquam voluptatum ut reprehenderit!";
$badwords = $_GET["badwords"]; 
$newparagraph = str_ireplace($badwords, "***", $paragraph); //ho utlizzato str_ireplace invece di str_replace perchè è case insensitive e av a sostituire anche le parole con le maiuscole anche se vengono trascritte in minuscolo
?>

<html>
    <body>
    <p><?php echo $paragraph ?></p> 
    <p>La lughezza del paragrafo è di <?php echo strlen($paragraph) ?> lettere (spazi compresi)</p>
    
    <p><?php echo $newparagraph ?></p>
    <p>La lughezza del nuovo paragrafo è di <?php echo strlen($newparagraph) ?> lettere (spazi compresi)</p>
    </body>
</html>



