git remote remove origin

-Comando per rimuovere l'attuale origine del progetto e poterlo associare ad una nuova repository

-Clone progetto

cp .env.example .env
composer install

-andiamo a modificare il .env con i dati relativi al database;
-php artisan key:gen
-php artisan migrate-> lancia le migrazioni che creano le tabelle del nostro paese
-npm i

# Storage

la memoria adibita a contenere i media del nostro progetto
Locale o Esterno

-Un servizio famoso esterno è S3 di AWS
-add_img_column_to_trainees_table
-questa migrazione ha il compito di aggiungere una colonna chiamata 'img' alla tabella 'trainees'


:product="$product"
Utilizzo questa sintassi per passare nel componente tutto il riferimento dell'oggetto Product senza< separare le informazioni in singole proprietà

php artisan storage:link

questo comando crea un link simbolico di storage all'interno nella cartella public

Storage::url()=> metodo ricostruisce i path dell'immagine a partire dal valore che abbiamo nel database

php artisan make:request
-Crea una nuova request che può essere customizzata

-Display Error

https://laravel.com/docs/12.x/validation#quick-displaying-the-validation-errors


-List Error
https://laravel.com/docs/12.x/validation#available-validation-rules



# fortify

E' un pacchetto(libreria) first party di Laravel che serve a gestire l'autenticazione.
Per autenticazione intendiamo un sistema di accesso e registrazione al nostro sito.

Installazione => seguiremo tutti i procedimenti passo passo(https://laravel.com/docs/12.x/fortify#customizing-user-authentication)

composer require laravel/fortify
-Installazioni delle dipendenze di PHP

php artisan fortify:install
Abbiamo reso disponibile al nostro progetto dei file di configurazione e delle logiche di Fortify per poter effettuare delle modifiche al comportamento di basi di fortify
php artisan migrate
per lanciare la nuova migrazione che il comando precedente ci ha pubblicato

-Registrazione
Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di registrazione
Copiamo la logica di questo link => https://laravel.com/docs/12.x/fortify#registration
Creiamo la cartella auth con dentro il file register.blade.php

Utilizziamo il comando php artisan route:list per vedere le rotte del nostro progetto e recuperare quelle di fortify

-Logout
Utilizziamo la rotta POST fornita da Fortify per creare un form che mi permetta di staccare la sessione dell'utente registrato

-Accesso(login)
-Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di accesso
Copiamo la logica di questo link => https://laravel.com/docs/12.x/fortify#authentication
Creiamo la cartella auth con dentro il file login.blade.php
