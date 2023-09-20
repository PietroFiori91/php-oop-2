<?php

class Prodotto {
    public $id;
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;
    public $tipoArticolo;

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipoArticolo) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipoArticolo = $tipoArticolo;
    }
}

$categoriaCani = new Categoria(1, "Cani");
$categoriaGatti = new Categoria(2, "Gatti");

$prodottoCiboCani = new Prodotto(1, "Cibo per Cani", 20, "cibo_cani.jpg", $categoriaCani, "Cibo");
$prodottoGiocoCani = new Prodotto(2, "Gioco per Cani", 15, "gioco_cani.jpg", $categoriaCani, "Gioco");
$prodottoCucciaCani = new Prodotto(3, "Cuccia per Cani", 50, "cuccia_cani.jpg", $categoriaCani, "Cuccia");

$prodottoCiboGatti = new Prodotto(4, "Cibo per Gatti", 15, "cibo_gatti.jpg", $categoriaGatti, "Cibo");
$prodottoGiocoGatti = new Prodotto(5, "Gioco per Gatti", 10, "gioco_gatti.jpg", $categoriaGatti, "Gioco");
$prodottoCucciaGatti = new Prodotto(6, "Cuccia per Gatti", 40, "cuccia_gatti.jpg", $categoriaGatti, "Cuccia");
