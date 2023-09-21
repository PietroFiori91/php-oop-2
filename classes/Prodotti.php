<?php
require_once(__DIR__ . './Categoria.php');
require_once(__DIR__ . '/../recensioniTrait.php');

class Prodotto
{
    use RecensioniTrait;

    public $id;
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;
    public $tipoArticolo;

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipoArticolo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipoArticolo = $tipoArticolo;
    }
}
