<?php
    $title = "PHP Badwords";

    // ricevo il paragrafo in ingresso
    $input_paragraph = $_GET["input-paragraph"];
    // var_dump($input_paragraph);
    $input_paragraph_length = strlen($input_paragraph);

    // lo trimmo e lo trasformo in lowercase
    $input_paragraph_trim = trim($input_paragraph);
    $input_paragraph_lowered = strtolower($input_paragraph_trim);

    // ricevo la parola da censurare
    $input_word = $_GET["censored-word"];
    // var_dump($input_word);

    // la trimmo e la trasformo in lowercase
    $input_word_trim = trim($input_word);
    $input_word_lowered = strtolower($input_word_trim);

    // sostituisco la parola all'interno del paragrafo con ***
    $censored_paragraph = str_replace($input_word_lowered, "***", $input_paragraph_lowered);
    // var_dump($censored_paragraph);
    $censored_paragraph_length = strlen($censored_paragraph);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- LINK BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- SCRIPT BOOTSTRAP -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
      defer
    ></script>
</head>

<body>
<div class="container mt-5">
    <h1 class="fw-bold text-center mb-5"><?= $title ?></h1>

    <!-- Paragrafo originale -->
    <h2 class="fw-bold fs-5">Paragrafo inserito: </h2>
    <p><?= $input_paragraph ?></p>
    <h2 class="fw-bold fs-5 mb-4">La lunghezza del paragrafo è: <?= $input_paragraph_length ?></h2>
    <hr>
    <!-- Paragrafo censurato -->
    <h2 class="fw-bold fs-5">Paragrafo censurato: </h2>
    <p><?= $censored_paragraph ?></p>
    <h2 class="fw-bold fs-5">La lunghezza del paragrafo è: <?= $censored_paragraph_length ?></h2>
</div>
    
</body>
</html>