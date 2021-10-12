<!-- Creare una variabile con un paragrafo di testo a vostra scelta (possibilmente corposo).
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi 
(***) tutte le occorrenze della parola da censurare. -->

<?php 
$paragrafo1 = "Michael Schumacher (Hürth, 3 gennaio 1969) è un ex pilota automobilistico tedesco.
È considerato uno dei migliori piloti di tutti i tempi. Insieme a Lewis Hamilton è il più vincente nella storia della Formula 1 con 7 titoli mondiali, i primi due con la Benetton (1994 e 1995) e successivamente cinque consecutivi con la Ferrari (2000, 2001, 2002, 2003 e 2004).   
Soprannominato Kaiser, Schumacher detiene alcuni record della Formula 1 avendo conseguito, oltre ai titoli iridati, anche il maggior numero di giri veloci in gara e di hat trick, ovvero pole position, vittoria e giro più veloce nello stesso Gran Premio. Fino al 13 ottobre 2013 ha detenuto anche il record assoluto di punti in carriera, superato in quell'occasione da Fernando Alonso e in seguito da altri quattro piloti. È al secondo posto all time per numero di gare vinte (91), podi (155) e di pole position (68), in tutti e tre i primati dietro al solo Hamilton.   
Esempio di pilota capace di migliorarsi costantemente nel corso degli anni, all'innato talento naturale ha unito progressivi affinamenti capaci di farlo eccellere nella condotta di gara, adattando il suo stile di guida al mutare delle condizioni e pianificando in anticipo ogni eventualità, il tutto mantenendo sempre una guida al limite; ciò anche grazie al duro allenamento a cui sottoponeva il proprio corpo, ben superiore ai colleghi della sua generazione. A questo ha aggiunto una spiccata sensibilità per i propri limiti nonché per quelli delle sue monoposto, aspetto che ne ha fatto un pilota raramente caduto in errori oltreché capace di indirizzare al meglio, attraverso i suoi riscontri e giudizi, il lavoro degli uomini della squadra; ingegneri in primis, a cominciare da Ross Brawn col quale ha instaurato un duraturo sodalizio tecnico protrattosi pressoché per l'intera carriera.  
Oltre che essere un pilota completo in ogni aspetto, ebbe anche grandi doti da collaudatore in grado di far crescere le proprie vetture. Inoltre, Schumacher è stato il primo tedesco a laurearsi campione del mondo di Formula 1: È stato l'icona più popolare nella Formula 1 fino al 2006, secondo un sondaggio della FIA.
Nel mondiale 2002 si è laureato campione del mondo con sei Gran Premi di anticipo (record assoluto), diventando poi anche l'unico pilota della storia a essere salito sul podio in tutte le gare di una stagione in programma, 17 in quell'anno. Il 12 ottobre 2003, vincendo il suo sesto mondiale, è diventato il più titolato pilota di Formula 1, superando il record di Juan Manuel Fangio, e nel 2004 ha marcato un ulteriore primato vincendo, con 13 successi su 18 gare, il quinto titolo iridato consecutivo oltreché settimo della carriera. Ritiratosi una prima volta alla fine del 2006, ha deciso di tornare a correre nella stagione 2010, a 41 anni, con la Mercedes, per poi ritirarsi definitivamente alla fine del 2012.
Il 29 dicembre 2013 è rimasto gravemente ferito in un incidente su una pista da sci a Méribel, a seguito del quale ha trascorso diversi mesi in coma farmacologico.";

$badwordsub = "***";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p>
        <h1>Paragrafo</h1>
        <?php 
            echo $paragrafo1;
        ?>
    </p>

    <div>
        <h3>Lunghezza del paragrafo :</h3>
        <?php            
           echo strlen($paragrafo1);
        ?>
    </div>

    <div>
        <?php            
         $needle = $_GET["name"];
         echo $needle;
        ?>
    </div>
    <div>
        <!-- str_replace(porzioneDaModificare, conCosa, stringa) -->
        <?php
        $nuovoparagrafo = str_replace($needle, $badwordsub, $paragrafo1, $count);
        echo $nuovoparagrafo;
        ?>
    </div>
    <div>
        <h1>La parola cercaa è stata sostituita</h1>
        <?php 
        echo $count;
        ?>
        <h1>volte</h1>
    </div>
        
</body>
</html>