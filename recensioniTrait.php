<?php

trait RecensioniTrait {
    private $recensioni = [];

    public function aggiungiRecensione($recensione) {
        $this->recensioni[] = $recensione;
    }

    public function visualizzaRecensioni() {
        return $this->recensioni;
    }
}
