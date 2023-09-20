<?php
require_once(__DIR__ . './classes/Categoria.php');
require_once(__DIR__ . './classes/Prodotti.php');

// Funzione per stampare una card di prodotto
function stampaCardProdotto($prodotto)
{
    echo '<div class="card">';
    echo '<img src="' . $prodotto->immagine . '" alt="' . $prodotto->nome . '">';
    echo '<h3>' . $prodotto->nome . '</h3>';
    echo '<p>Prezzo: $' . $prodotto->prezzo . '</p>';
    echo '<p>Categoria: ' . $prodotto->categoria->nome . '</p>';
    echo '<p>Tipo: ' . $prodotto->tipoArticolo . '</p>';
    echo '</div>';
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