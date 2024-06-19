# Birra Garofalo

Questo progetto HTML rappresenta un modulo di registrazione per il sito web della Birra Garofalo.

## Indice

- [Descrizione]
- [Installazione]
- [Utilizzo]

## Descrizione

Il progetto HTML è una pagina web che include un modulo di registrazione per raccogliere informazioni come il nome, il cognome e la regione di provenienza dell'utente. Gli utenti devono anche acconsentire al trattamento dei dati personali prima di poter inviare il modulo.

## Installazione

Per visualizzare il progetto localmente, segui questi passaggi:

1. Clona il repository:
    ```bash
    git clone https://github.com/tuo-username/birra-garofalo.git
    ```

2. Naviga nella directory del progetto:
    ```bash
    cd birra-garofalo
    ```

3. Assicurati di avere un server web con PHP e MySQL configurati.

4. Crea un database MySQL chiamato `birra_garofalo` e una tabella `users` con la seguente struttura:
    ```sql
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        region VARCHAR(255) NOT NULL,
        trattamentodati BOOLEAN NOT NULL
    );
    ```

5. Modifica i dettagli di connessione al database nel file `database.php` se necessario.

6. Apri il file `index.html` in un browser web.

## Utilizzo

Puoi utilizzare il modulo di registrazione presente nella pagina HTML per raccogliere i dati di prospect interessati al tuo prodotto e/o servizio.
Una volta compilato il form, i dati raccolti verranno trasmessi al database MySQL attraverso il file database.php e l'utente sarà reindirizzato nella pagina thank_you.html

