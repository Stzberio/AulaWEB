
Obiettivo: Creare una classe PHP chiamata ContoBancario che rappresenti un conto bancario e includa funzionalità di base come deposito, prelievo e visualizzazione del saldo.

Requisiti:

La classe ContoBancario deve avere almeno due proprietà private: titolare (stringa) e saldo (numero).
Aggiungere un costruttore che accetti il nome del titolare e un saldo iniziale come parametri.
Implementare i seguenti metodi pubblici:
deposita($importo): Aggiunge l'importo specificato al saldo corrente.
preleva($importo): Sottrae l'importo specificato dal saldo corrente, a condizione che ci siano fondi sufficienti.
getSaldo(): Restituisce il saldo corrente.
Assicurarsi che il metodo preleva non permetta di ritirare più denaro di quanto presente sul conto.


<?php
// Definizione della classe ContoBancario
class ContoBancario {
    private $titolare;
    private $saldo;

    // Costruttore della classe
    public function __construct($titolare, $saldoIniziale) {
        $this->titolare = $titolare;
        $this->saldo = $saldoIniziale;
    }

    // Metodo per depositare denaro
    public function deposita($importo) {
        $this->saldo = $this->saldo + $importo;
    }

    // Metodo per prelevare denaro
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo = $this->saldo - $importo;
        } else {
            echo "Saldo insufficiente per il prelievo richiesto.<br>";
        }
    }

    // Metodo per ottenere il saldo corrente
    public function getSaldo() {
        return $this->saldo;
    }
}

// Creazione di un nuovo conto bancario
$conto = new ContoBancario("Mario Rossi", 1000);

// Deposito di 500 euro
$conto->deposita(500);

// Prelievo di 200 euro
$conto->preleva(200);

// Visualizzazione del saldo attuale
echo "Il saldo attuale è: " . $conto->getSaldo() . " euro.<br>";

// Tentativo di prelevare 1500 euro (oltre il saldo disponibile)
$conto->preleva(1500);

// Visualizzazione del saldo dopo il tentativo di prelievo
echo "Il saldo attuale è: " . $conto->getSaldo() . " euro.<br>";
?>



 <!-- <?php
class ContoBancario {
    private $titolare;
    private $saldo;

    // Costruttore della classe
    public function __construct($titolare, $saldoIniziale) {
        $this->titolare = $titolare;
        $this->saldo = $saldoIniziale;
    }

    // Metodo per depositare denaro
    public function deposita($importo) {
        $this->saldo += $importo;
    }

    // Metodo per prelevare denaro
    public function preleva($importo) {
        if ($this->saldo >= $importo) {
            $this->saldo -= $importo;
        } else {
            echo "Saldo insufficiente per il prelievo richiesto.<br>";
        }
    }

    // Metodo per ottenere il saldo
    public function getSaldo() {
        return $this->saldo;
    }
}

// Creazione di un'istanza della classe ContoBancario
$conto = new ContoBancario("Mario Rossi", 1000);

// Test delle funzionalità della classe
$conto->deposita(500);
$conto->preleva(200);
echo "Saldo attuale: €" . $conto->getSaldo() . "<br>"; // Dovrebbe stampare 1300

$conto->preleva(1500); // Test prelievo oltre il saldo disponibile
?>  -->
