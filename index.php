<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
    $text = 'Scrivere poche cose così, a caso, un po\' uguali però e non così a caso, pare inutile, eppure non lo è! Poche pare, è inutile sì ma è pure (pupù!) divertente.';
    // Numero di tutti i caratteri della stringa
    $textLength = strlen($text);

    $curse = $_GET['word']; // inserire a fine url: ?word=pupù

    $revisedText = str_replace($curse,'***',$text,$count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>PHP Curse Censor</h1>
    <p>
        <?php echo "Qui di seguito è riportato un paragrafo: \"$text\"";?>
    </p>
    <p>
        <?php echo "È costituito da $textLength caratteri.";?>
    </p>
    <p>
        <?php echo "Applicando il filtro \"censura\" sono stati oscurati $count caratteri. Il nuovo testo è: \"$revisedText\"";?>
    </p>
</body>
</html>