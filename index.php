<?php

$privaciEtermini =[
   "Introduzione" => [],
   "Normative sulla privacy" => [],
   "Termini di servizio" => [],
   "Tecnologie" => [],
   "Domande fequenti" => [
      [
         'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
         'risposta' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
      ],
      [
         'domanda' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
         'risposta' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
      ],
      [
         'domanda' => "Perché il mio account è associato a un paese?",
         'risposta' => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
      ],
      [
         'domanda' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
         'risposta' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.",
      ],
      [
         'domanda' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
         'risposta' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
      ]
   ],
]
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <title>PHP GOOGLE FAQ</title>
   </head>
   <body>
      <header>
         <div class="top">
            <div class="logo">
               <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo google">
            </div>
            <h2>Privacy e termini</h2>
         </div>
         <div class='nav'>
            <ul class="privacyList">
            <?php foreach($privaciEtermini as $chiave => $valore) : ?>
               <li><?= $chiave; ?></li>
            <?php endforeach; ?>
            </ul>
         </div>
      </header>
      <main>
         <div class="container">
            <?php foreach($privaciEtermini["Domande fequenti"]  as $faq) : ?>
               <h3><?= $faq['domanda']; ?></h3>
               <p><?= $faq['risposta']; ?></p>
            <?php endforeach; ?>
         </div>
      </main>
      <footer>

      </footer>
   </body>
</html>