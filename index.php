<?php
require_once(__DIR__ . './classes/Categoria.php');
require_once(__DIR__ . './classes/Prodotti.php');
require_once(__DIR__ . './customException.php');


// CREO PRODOTTO
$prodottoCiboCani = new Prodotto(1, "Cibo per Cani", 20, "https://picsum.photos/200/200", $categoriaCani, "Cibo");

// RECENSIONE
$prodottoCiboCani->aggiungiRecensione("Ottimo cibo per cani!");

// VISUAL RECENSIONE
$recensioni = $prodottoCiboCani->visualizzaRecensioni();
foreach ($recensioni as $recensione) {
    echo "Recensione: $recensione<br>";
}

try {
    // ECCEZIONE
    throw new CustomException("ERRORE");
} catch (CustomException $e) {
    echo $e->errorMessage();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Shop Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <h1>Prodotti per Cani</h1>
        <div class="row">
            <?php foreach (array($prodottoCiboCani, $prodottoGiocoCani, $prodottoCucciaCani) as $prodotto) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="card-img-top" alt="<?php echo $prodotto->nome; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <p class="card-text">Prezzo: $<?php echo $prodotto->prezzo; ?></p>
                            <p class="card-text">Categoria: <?php echo $prodotto->categoria->nome; ?></p>
                            <p class="card-text">Tipo: <?php echo $prodotto->tipoArticolo; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <h1>Prodotti per Gatti</h1>
        <div class="row">
            <?php foreach (array($prodottoCiboGatti, $prodottoGiocoGatti, $prodottoCucciaGatti) as $prodotto) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="card-img-top" alt="<?php echo $prodotto->nome; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <p class="card-text">Prezzo: $<?php echo $prodotto->prezzo; ?></p>
                            <p class="card-text">Categoria: <?php echo $prodotto->categoria->nome; ?></p>
                            <p class="card-text">Tipo: <?php echo $prodotto->tipoArticolo; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>