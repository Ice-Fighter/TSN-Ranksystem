<?PHP
$lang = array();
$lang['adduser']			= "L'utente %s ( Client-ID: %s; Client-database-ID %s) non è presente nel database -> L'utente è stato aggiunto al sistema.";
$lang['changedbid']			= "L'utente %s (unique Client-ID: %s) ha ottenuto un nuovo database-ID (%s). Aggiorna il vecchio Client-database-ID (%s) e resetta il tempo raggiunto!";
$lang['crawl']				= "Scansione degli utenti connessi e conteggio delle attività...";
$lang['clean']				= "Scansione degli utenti che vanno eliminati...";
$lang['cleanc']				= "Utenti eliminati con successo dal database";
$lang['cleancdesc']			= "Con questa funzione i vecchi utenti nel database verranno eliminati.<br><br>Così da poter sincronizzare gli utenti del Ranksystem con il database di TeamSpeak. Gli utenti non presenti nel database di TeamSpeak verranno cancellati dal Ranksystem.<br><br>Questa funzione puo essere abilitata solo quando la modalità slowmode non è abilitata!<br><br><br>Per la correzione automatica del database di utenti TeamSpeak potrete usare \"Client Cleaner\" :<br>http://ts-n.net/clientcleaner.php";
$lang['cleandel']			= "Sono stati cancellati %s utenti dal database del RankSystem perché non esistevano piu nel database di TeamSpeak.";
$lang['cleanno']			= "Non è stato rilevato nulla da cancellare...";
$lang['cleanp']				= "tempo di pulitura del database";
$lang['cleanpdesc']			= "Imposta il tempo che deve trascorrere alla prossima pulitura del database.<br><br>Imposta il tempo in secondi.<br><br>È consigliato eseguire la 'pulitura' del database almeno una volta al giorno, in quanto il tempo di 'pulitura' del database aumenta nel caso vi sia un database di grandi dimensioni.";
$lang['cleanrs']			= "Numero di utenti trovati nel database del Ranksystem: %s";
$lang['cleants']			= "Numero di utenti trovati nel database di TeamSpeak: %s (of %s)";
$lang['days']				= "%s <small>giorni</small>";
$lang['dbconerr']			= "Connessione al Database fallita: ";
$lang['delcldgrpif']		= "Errore nella rimozione delle informazioni del servergroup: %s";
$lang['delcldgrpsc']		= "Informazioni su servergroup per l'utente %s cancellate correttamente.";
$lang['delclientsif']		= "%s Utenti cancellati dal database del Ranksystem!";
$lang['delclientssc']		= "%s Utenti correttamente cancellati dal database del Ranksystem!";
$lang['errlogin']			= "Nome utente e/o password errati! Riprova...";
$lang['errlogin2']			= "Protezione attacchi brute force: Riprova in %s secondi!";
$lang['errlogin3']			= "Protezione attacchi brute force: Hai commesso troppi errori. Sei stato bannato per 5 minuti!";
$lang['error']				= "Errore ";
$lang['errremgrp']			= "Errore nella rimozione dell'utente: %s (Client-ID) Dal server Group con il servergroup-database-ID: %s!";
$lang['errremdb']			= "Errore nella rimozione dell'utente: %s (Client-ID) dal database del RankSystem!";
$lang['errsel']				= "Errore nella selezione degli <br>Utenti: %s<br>opzione 'cancella utenti': %s<br>opzione 'somma del tempo online': %s";
$lang['errukwn']			= "È stato riscontrato un errore sconosciuto!";
$lang['errupcount']			= "Errore nel rinnovo della somma del tempo online dell’utente %s con l’Id unico %s";
$lang['highest']			= "È stato raggiunto il rank massimo";
$lang['install']			= "Installazione";
$lang['instdb']				= "Installa il database:";
$lang['instdbsuc']			= "Il database %s è stato creato con successo.";
$lang['insterr1']			= "ATTENTION: You are trying to install the Ranksystem, but there is already existing a database with the name \"%s\".<br>Due installation this database will be dropped!<br>Be sure you want this. If not, please choose an other database name.";
$lang['insterr2']			= "PDO is needed but seems not installed. Install <a href=\"http://php.net/manual/de/pdo.installation.php\" target=\"_blank\">PDO</a> and try it again!";
$lang['insterr3']			= "PHP exec function need to be enabled but seems to be disabled. Please enable the PHP <a href=\http://php.net/manual/de/function.exec.php\" target=\"_blank\">exec</a> function and try it again!";
$lang['insterr4']			= "Your PHP version (%s) is below 5.5.0. Update your PHP and try it again!";
$lang['isntwicfg']			= "Impossibile salvare la configurazione del database! Modifica il file 'other/dbconfig.php' dandogli i permessi 0777 (chmod 777 nomefile on windows 'full access') e riprova.";
$lang['isntwicfg2']			= "Configurate Webinterface";
$lang['isntwichm']			= "Permessi di scrittura negati per la cartella \"%s\". Per favore dai i permessi chmod 777 (on windows 'full access') e prova ad avviare il Ranksystem di nuovo.";
$lang['isntwidbhost']		= "Indirizzo host DB:";
$lang['isntwidbhostdesc']	= "L'indirizzo del server su cui si trova il database (Se il database è in locale basterà inserire 127.0.0.1)<br>(IP o DNS)";
$lang['isntwidbmsg']		= "Errore del Database: ";
$lang['isntwidbname']		= "Nome DB:";
$lang['isntwidbnamedesc']	= "Nome del database";
$lang['isntwidbpass']		= "Password DB:";
$lang['isntwidbpassdesc']	= "La Password per accedere al database";
$lang['isntwidbtype']		= "Tipo DB:";
$lang['isntwidbtypedesc']	= "Il tipo di Database<br><br>Dovrai installare i driver PDO.<br>Per maggiori informazioni sui requisiti guarda sulla pagina http://ts-n.net/ranksystem.php";
$lang['isntwidbusr']		= "Utente DB:";
$lang['isntwidbusrdesc']	= "Nome dell'utente che ha l'accesso al database";
$lang['isntwidel']			= "Per favore cancella il file 'install.php' dal tuo webserver e apri la %s per configurare il Ranksystem!";
$lang['isntwiusr']			= "L'utente dell'interfaccia Web è stato creato con successo.";
$lang['isntwiusrcr']		= "Create Webinterface-User";
$lang['isntwiusrdesc']		= "Inserisci nome utente e password per l'accesso all'interfaccia web. Con l'interfaccia web tu potrai configurare il Ranksystem.";
$lang['isntwiusrh']			= "Accesso - Interfaccia Web";
$lang['listacsg']			= "Servergroup attuale";
$lang['listcldbid']			= "Client-database-ID";
$lang['listexcept']			= "No, cause excepted";
$lang['listip']				= "Indirizzo IP";
$lang['listnick']			= "Nome Utente";
$lang['listnxsg']			= "Prossimo servergroup";
$lang['listnxup']			= "Prossimo Rank";
$lang['listrank']			= "Rank";
$lang['listseen']			= "Ultima volta online";
$lang['listsuma']			= "Somma del tempo di attività";
$lang['listsumi']			= "Somma del tempo in IDLE";
$lang['listsumo']			= "Somma del tempo Online";
$lang['listuid']			= "unique Client-ID";
$lang['login']				= "Login";
$lang['nocount']			= "L'utente %s (unique Client-ID: %s; Client-database-ID %s) è una query oppure effettua molte connessioni (conterà solo la prima connessione) -> Non verrà contato!";
$lang['noentry']			= "Nessuna voce trovata..";
$lang['pass']				= "Password";
$lang['queryname']			= "Il primo nome del bot è già in uso. Sto riprovando con il secondo...";
$lang['sccrmcld']			= "L'utente con il Client-ID %s è stato correttamente cancellato dal database del ranksystem.";
$lang['sccupcount']			= "All'utente con il Client-ID %s è stato assegnato un tempo online di %s.";
$lang['setontime']			= "Somma tempo online";
$lang['setontimedesc']		= "Inserisci il nuovo tempo online, che verrà impostato per gli utenti precedentemente selezionati. Il tempo online raccolto precedentemente verrà sovrascritto.<br><br>La somma del tempo online inserita verrà considerata per il rank.";
$lang['sgrpadd']			= "All'utente %s è stato assegnato il servergroup %s (Client-ID unico: %s; Client-database-ID %s).";
$lang['sgrprerr']			= "C'è stato un problema con l'aggiunta del servergroup all'utente %s (unique Client-ID: %s; Client-database-ID %s)!";
$lang['sgrprm']				= "All'utente %s è stato rimosso il servergroup %s (unique Client-ID: %s; Client-database-ID %s).";
$lang['stix0001']			= "Statistiche del server";
$lang['stix0002']			= "Utenti totali";
$lang['stix0003']			= "Vedi dettagli";
$lang['stix0004']			= "Tempo online di tutti gli utenti / Totale";
$lang['stix0005']			= "Vedi i migliori di sempre";
$lang['stix0006']			= "Vedi i migliori del mese";
$lang['stix0007']			= "Vedi i migliori della settimana";
$lang['stix0008']			= "Utilizzo del server";
$lang['stix0009']			= "Negli ultimi 7 giorni";
$lang['stix0010']			= "Negli ultimi 30 giorni";
$lang['stix0011']			= "Nelle ultime 24 ore";
$lang['stix0012']			= "seleziona il periodo";
$lang['stix0013']			= "Ultimo giorno";
$lang['stix0014']			= "Ultima settimana";
$lang['stix0015']			= "Ultimo mese";
$lang['stix0016']			= "Tempo di attività/inattività (di tutti gli utenti)";
$lang['stix0017']			= "Versioni  (di tutti gli utenti)";
$lang['stix0018']			= "Nazionalità  (di tutti gli utenti)";
$lang['stix0019']			= "Piattaforme  (di tutti gli utenti)";
$lang['stix0020']			= "Statistiche correnti";
$lang['stix0023']			= "Stato del server";
$lang['stix0024']			= "Online";
$lang['stix0025']			= "Offline";
$lang['stix0026']			= "Utenti (Online / Max)";
$lang['stix0027']			= "Numero delle stanze";
$lang['stix0028']			= "Ping medio del server";
$lang['stix0029']			= "Totale byte ricevuti";
$lang['stix0030']			= "Totale byte inviati";
$lang['stix0031']			= "Tempo online del server";
$lang['stix0032']			= "Prima di essere offline:";
$lang['stix0033']			= "<span id=\"days\">00</span> Giorni, <span id=\"hours\">00</span> Ore, <span id=\"minutes\">00</span> Min, <span id=\"seconds\">00</span> Sec";
$lang['stix0034']			= "Media Pacchetti persi";
$lang['stix0035']			= "Statistiche complessive";
$lang['stix0036']			= "Nome del server";
$lang['stix0037']			= "Indirizzo del server (Indirizzo del server : Porta)";
$lang['stix0038']			= "Password del server";
$lang['stix0039']			= "No (Il server è pubblico)";
$lang['stix0040']			= "Si (Il server è privato)";
$lang['stix0041']			= "ID del server";
$lang['stix0042']			= "Piattaforma del server";
$lang['stix0043']			= "Versione del Server";
$lang['stix0044']			= "Data di creazione del server (dd/mm/yyyy)";
$lang['stix0045']			= "Inserito nella lista dei server";
$lang['stix0046']			= "Attivato";
$lang['stix0047']			= "Non attivato";
$lang['stix0048']			= "Non vi sono ancora abbastanza informazioni...";
$lang['stix0049']			= "Tempo online di tutti gli utenti / mese";
$lang['stix0050']			= "Tempo online di tutti gli utenti / settimana";
$lang['stix0051']			= "Il TeamSpeak non ha una data di creazione...";
$lang['stmy0001']			= "Le mie statistiche";
$lang['stmy0002']			= "Rank";
$lang['stmy0003']			= "Database ID:";
$lang['stmy0004']			= "ID unico:";
$lang['stmy0005']			= "Connessioni totali al server:";
$lang['stmy0006']			= "Data di inzio statistiche:";
$lang['stmy0007']			= "Tempo totale online:";
$lang['stmy0008']			= "Tempo online negli ultimi 7 giorni:";
$lang['stmy0009']			= "Tempo online negli ultimi 30 giorni:";
$lang['stmy0010']			= "Obbiettivi completati:";
$lang['stmy0011']			= "Progresso del tempo raggiunto";
$lang['stmy0012']			= "Tempo: Leggendario";
$lang['stmy0013']			= "Perché hai raggiunto il tempo online di of %s ore.";
$lang['stmy0014']			= "Completato";
$lang['stmy0015']			= "Tempo: Gold";
$lang['stmy0016']			= "% Completata per il raggiungimento del livello 'Leggendario'";
$lang['stmy0017']			= "Tempo: Silver";
$lang['stmy0018']			= "% Completata per il raggiungimento del livello Gold";
$lang['stmy0019']			= "Tempo: Bronze";
$lang['stmy0020']			= "% Completata per il raggiungimento del livello Silver";
$lang['stmy0021']			= "Tempo: Unranked";
$lang['stmy0022']			= "% Completata per il raggiungimento del livello Bronze";
$lang['stmy0023']			= "Progresso obbiettivo connessioni";
$lang['stmy0024']			= "Connessioni: Legendary";
$lang['stmy0025']			= "Perchè ti sei connesso %s volte al server.";
$lang['stmy0026']			= "Connessioni: Gold";
$lang['stmy0027']			= "Connessioni: Silver";
$lang['stmy0028']			= "Connessioni: Bronze";
$lang['stmy0029']			= "Connessioni: Unranked";
$lang['stmy0030']			= "Progresso prossimo servergroup";
$lang['stnv0001']			= "News del server";
$lang['stnv0002']			= "Chiudi";
$lang['stnv0003']			= "Aggiorna le informazioni utente";
$lang['stnv0004']			= "Aggiorna solamente quando vengono modificate le informazioni su TS3, come ad esempio un cambio del nome od un nuovo collegamento";
$lang['stnv0005']			= "Funziona solamente se sei connesso al server TS3 in contemporaneo (devi avere TeamSpeak aperto ed essere collegato con la tua identità per vedere le tue statistiche)";
$lang['stnv0006']			= "Aggiorna";
$lang['stnv0007']			= "Area Battaglie";
$lang['stnv0008']			= "Puoi sfidare gli altri utenti in una battaglia tra 2 utenti o 2 team.";
$lang['stnv0009']			= "Mentre la battaglia è attiva il tempo online dell'utente o del team sarà contato.";
$lang['stnv0010']			= "Quando la battaglia giungerà alla fine il team o l'utente col maggior tempo online vincerà.";
$lang['stnv0011']			= "(Regolarmente un combattimento dura 48 ore)";
$lang['stnv0012']			= "Il tema o l'utente vincitore riceverà un boost, che l'utente potrà utilizzare quando vorrà.";
$lang['stnv0013']			= "Questo sarà mostrato nella pagina <a href=\"my_stats.php\">Le mie statistiche</a> tab.";
$lang['stnv0014']			= "(Potrebbe essere un booster(2x) per 8 hours, o un aggiunta istantanea del tempo online (4 hours), etc.";
$lang['stnv0015']			= "Questi boost possono essere utilizzati ad esempio per scalare la classifica della settimana.";
$lang['stnv0016']			= "Non disponibile";
$lang['stnv0017']			= "Non sei connesso al server TeamSpeak, perciò non potrai vedere le tue statistiche personali.";
$lang['stnv0018']			= "Per favore connettiti al server TeamSpeak e ricarica questa sessione premendo il pulsante blu in alto a destra.";
$lang['stnv0019']			= "Le mie statistiche - contenuto della pagina";
$lang['stnv0020']			= "Questa pagina contiene un sommario generale delle tue statistiche personali e le attività nel server.";
$lang['stnv0021']			= "Queste informazioni sono state inserite dal primo avvio del Ranksystem e non dall'inizio del server TeamSpeak.";
$lang['stnv0022']			= "Questa pagina riceve i dati dal database. Perciò potrebbe avere un lieve ritardo nel ricevere le informazioni.";
$lang['stnv0023']			= "La somma contenuta nei grafici ad anello potrebbe differire dal numero degli ‘Utenti totali'. Il motivo è che quei dati non erano stati raccolti dalla versione precedente del Ranksystem.";
$lang['stnv0024']			= "Ranksystem - Statistiche";
$lang['stnv0025']			= "Inserimenti limitati";
$lang['stnv0026']			= "tutti";
$lang['stnv0027']			= "Le informazioni su questo sito potrebbero NON essere aggiornate in quanto sembra che la query del Ranksystem non sia connessa a TeamSpeak.";
$lang['stnv0028']			= "(Non sei connesso al TS3!)";
$lang['stnv0029']			= "Lista dei Rank";
$lang['stnv0030']			= "Ranksystem info";
$lang['stnv0031']			= "Nel campo di ricerca potrai inserire un nome utente, un Client-ID o un Client-database-ID.";
$lang['stnv0032']			= "Potrai inoltre filtrare i risultati (vedi sotto). Puoi inserire i filtri nel campo di ricerca.";
$lang['stnv0033']			= "La ricerca di utenti combinata a dei filtri è possible. Inserire prima il filtro e successivamente nome utente o ID.";
$lang['stnv0034']			= "È inoltre possibile combinare diversi filtri. Inseriscili consecutivamente nel campo di ricerca.";
$lang['stnv0035']			= "<u>Esempio:</u><br>filtro:non esclusi:Utente Teamspeak";
$lang['stnv0036']			= "Mostra solo gli utenti che sono esclusi (client, servergroup or channel exception).";
$lang['stnv0037']			= "Mostra solo gli utenti che non sono esclusi.";
$lang['stnv0038']			= "Mostra solo gli utenti online.";
$lang['stnv0039']			= "Mostra solo gli utenti offline";
$lang['stnv0040']			= "Mostra solo gli utenti che sono in un determinato Server Group. Rappresentano il rank attuale.<br>Sostituisci qui <i>GROUPID</i>.";
$lang['stnv0041']			= "Mostra solo gli utenti selezionati per ultima visita effettuata.<br>Replace <i>OPERATOR</i> con '<' or '>' or '=' or '!='.<br>E Sostituisci qui <i>TIME</i> con formato data 'Y-m-d H-i' (example: 2016-06-18 20-25).<br>Esempio: filter:lastseen:<:2016-06-18 20-25:";
$lang['stnv0042']			= "Mostra solo gli utenti di un determinato paese.<br>Sostituisci qui <i>TS3-COUNTRY-CODE</i> e il codice del paese.<br>Per la lista dei codici google for ISO 3166-1 alpha-2";
$lang['stri0001']			= "Informazioni sul Ranksystem";
$lang['stri0002']			= "Che cos'è il ranksystem?";
$lang['stri0003']			= "Un TS3 Bot, che automaticamente attribuisce i rank (servergroups) agli utenti su un TeamSpeak 3 per il tempo trascorso online o di attività online. Inoltre raccoglie info e statistiche sull’utente e mostra i risultati sul sito.";
$lang['stri0004']			= "Chi ha creato il Ranksystem?";
$lang['stri0005']			= "Quando è stato creato?";
$lang['stri0006']			= "Prima alpha: 05/10/2014.";
$lang['stri0007']			= "Prima Beta: 01/02/2015.";
$lang['stri0008']			= "Puoi trovare l'ultima versione del Ranksystem alla pagina <a href=\"http://ts-n.net/ranksystem.php\" target=\"_blank\">Ranksystem Website</a>.";
$lang['stri0009']			= "Com'è stato creato il RankSystem?";
$lang['stri0010']			= "Che linguaggio è stato utilizzato";
$lang['stri0011']			= "Utilizza inoltre le seguenti librerie:";
$lang['stri0012']			= "Un ringraziamento speciale a:";
$lang['stri0013']			= "<a href=\"http://nya-pw.ru/\" target=\"_blank\">sergey</a>, <a href=\"http://vk.com/akhachirov\" target=\"_blank\">Arselopster</a> & <a href=\"http://vk.com/zheez\" target=\"_blank\">DeviantUser</a> - for russian translation";
$lang['stri0014']			= "Bejamin Frost - for per i primi bootstrap design";
$lang['stri0015']			= "<a href=\"http://hydrake.eu/\" target=\"_blank\">ZanK</a> - per la traduzione italiana";
$lang['stri0016']			= "<a href=\"http://iraqgaming.net/\" target=\"_blank\">DeStRoYzR</a> & <a href=\"http://www.sagamer.net/\" target=\"_blank\">Jehad</a>  - per avviare la traduzione in arabo";
$lang['stri0017']			= "<a href=\"http://whitecs.ro/\" target=\"_blank\">SakaLuX</a> - per avviare la traduzione in rumeno";
$lang['sttw0001']			= "Top utenti";
$lang['sttw0002']			= "Della settimana";
$lang['sttw0003']			= "con %s ore di tempo online";
$lang['sttw0004']			= "Top 10 a confronto";
$lang['sttw0005']			= "Ore (Definisce il 100 %)";
$lang['sttw0006']			= "%s ore (%s&#37;)";
$lang['sttw0007']			= "Top 10 Statistiche";
$lang['sttw0008']			= "Top 10 vs Altri utenti in tempo online";
$lang['sttw0009']			= "Top 10 vs Altri utenti in tempo di attività";
$lang['sttw0010']			= "Top 10 vs Altri utenti in tempo di inattività";
$lang['sttw0011']			= "Top 10 (in ore)";
$lang['sttw0012']			= "Gli altri %s utenti (in ore)";
$lang['sttw0013']			= "con %s ore di tempo attivo";
$lang['sttm0001']			= "Del mese";
$lang['stta0001']			= "Di sempre";
$lang['upinf']				= "È stata trovato una versione piu recente del RankSystem (informazioni su come aggiornare qui: http://ts-n.net/ranksystem.php?artid=84#01id84); Informa gli utenti del server...";
$lang['upmsg']				= "\nHey, Una nuova versione del [B]Ranksystem[/B] è disponibile!\n\nVersione corrente: %s\n[B]Nuova Versione: %s[/B]\n\nPer maggiori informazioni visita il nostro sito [URL]http://ts-n.net/ranksystem.php[/URL].";
$lang['upsucc']				= "Aggiornamento del database eseguito con successo.";
$lang['upuser']				= "L'utente %s (unique Client-ID: %s; Client-database-ID %s) ha ottenuto un nuovo conteggio (somma del tempo online) di %s (tempo di attività (rispetto al nuovo conteggio): %s).";
$lang['upuserboost']		= "L'utente %s (unique Client-ID: %s; Client-database-ID %s) ha ottenuto un nuovo conteggi (somma del tempo online) di %s (tempo di attività (rispetto al nuovo conteggio): %s) <b>[BOOST %sx]</b>.";
$lang['upusrerr']			= "Il Client-ID unico %s non è raggiungibile dal sistema TeamSpeak!";
$lang['upusrinf']			= "L'utente %s è stato informato correttamente.";
$lang['user']				= "Nome Utente";
$lang['wiaction']			= "Azione";
$lang['wiboost']			= "Boost";
$lang['wiboostdesc']		= "Dai all'utente sul TS3 un servergroup (che dovrà essere creato manualmente), con il quale potrai definire il Boost. Definisci anche il fattore di moltiplicazione (per esempio 2x) e il (per quanto il boost durerà).<br>Più alto è il fattore, più velocemente l'utente raggiungerà il rank successivo.<br>Uno volta che il tempo impostato finirà il servergroup verrà rimosso in automatico dal RankSystem.Il tempo parte non appena viene assegnato il servergroup all'utente.<br><br>servergroup ID => fattore (2,3) => tempo (in secondi)<br><br>Per separare ogni voce utilizza la virgola.<br><br>Esempio:<br>12=>2=>6000,13=>3=>2500,14=>5=>600<br><br>Nell'esempio il servergroup 12 per i successivi 6000 secondi gli verrà conteggiato il doppio del tempo online, al servergroup 13 verrà moltiplicato il tempo per 3 per 2500 secondi, e cosi via...";
$lang['wibot1']				= "Il Ranksystem Bot dovrebbe essere stoppato. Controlla il log qui sotto per maggiori informazioni!";
$lang['wibot2']				= "Il Ranksystem Bot dovrebbe essere avviato. Controlla il log qui sotto per maggiori informazioni!";
$lang['wibot3']				= "Il Ranksystem Bot dovrebbe essere riavviato. Controlla il log qui sotto per maggiori informazioni!";
$lang['wibot4']				= "Avvia / Ferma il Bot Ranksystem";
$lang['wibot5']				= "Avvia il Bot";
$lang['wibot6']				= "Ferma il Bot";
$lang['wibot7']				= "Riavvia il Bot";
$lang['wibot8']				= "Log del Ranksystem (estrai):";
$lang['wibot9']				= "Compila tutti i campi obbligatori prima di avviare il bot Ranksystem!";
$lang['wichdbid']			= "Client-database-ID reset";
$lang['wichdbiddesc']		= "Resetta il tempo online di un utente se il suo database-ID è cambiato.<br><br>Esempio:<br>Se un utente viene rimosso da TeamSpeak, gli viene assegnato un nuovo database-ID con la successiva connesione al server.";
$lang['wiconferr']			= "C'è un errore nella configurazione del RankSystem. Vai nell'interfaccia web i sistema le Impostazioni Principali. Specialmente la configurazione 'rank'!";
$lang['widaform']			= "Formato data";
$lang['widaformdesc']		= "scegli il formato della data.<br><br>Esempio:<br>%a Giorni, %h Ore, %i Min, %s Sec";
$lang['widbcfgsuc']			= "Configurazione del database salvata con successo.";
$lang['widbcfgerr']			= "Errore nel salvataggio della configurazione del database! Connessione fallita o errore nella sovrascrittura del file 'other/dbconfig.php'";
$lang['widelcld']			= "elimina utenti";
$lang['widelcldgrp']		= "rinnova gruppi";
$lang['widelcldgrpdesc']	= "Il Ranksystem memorizzerà il servergroup assegnato, così che non sia più necessario eseguire continuamente il worker.php.<br><br>Con questa funzione potrai rimuovere le informazioni salvate relative ad un servergroup. Il Ranksystem proverà a dare a tutti gli utenti connessi al TS3 il servergroup del loro rank.<br>Per ogni utente, che ottenga il servergroup o che sia su un servergroup, il Ranksystem lo memorizzerà come descritto all'inizio.<br><br>Questa funzione può essere molto utile, quando un utente non è in un servergroup, Gli può essere attribuito il tempo online.<br><br>Attenzione: Eseguilo solo quando sei sicuro che non vi sia un aumento di rank per l'utente! Altrimenti il Ranksystem non potrà rimuovere il precedente servergroup in quanto non è memorizzato ;-)";
$lang['widelclddesc']		= "Cancella gli utenti precedentemente selezionati dal Ranksystem.<br><br>Ciò non modificherà lo stato degli utenti nel database di TeamSpeak.";
$lang['widelsg']			= "rimosso(i) dal servergroup";
$lang['widelsgdesc']		= "Scegli se agli utenti venga rimosso anche l'ultimo servergroup conosciuto, quando cancelli gli utenti dal database del Ranksystem.<br><br>Considererà solamente i servergroup riguardanti il Ranksystem";
$lang['wideltime']			= "Tempo di eliminazione";
$lang['wideltimedesc']		= "Cancella i 'vecchi utenti' dal database del Ranksystem.<br>Inserisci il tempo dopo cui un utente che non si connette al TeamSpeak verrà eliminato.<br><br>0 - Cancellerà gli utenti dal Ranksystem<br><br>I dati degli utenti su TeamSpeak non verranno toccati!";
$lang['wiexcid']			= "Eccezione Stanze";
$lang['wiexciddesc']		= "Inserisci gli ID delle stanze dove non verrà conteggiato il tempo del Rank.<br><br>Se un utente resta in uno dei canali elencati, il tempo non sarà completamente ignorato ma verrà conteggiato come tempo in IDLE.<br><br>Di conseguenza avrà senso solo se si utilizzerà la modalità 'Tempo di attività'.";
$lang['wiexgrp']			= "Eccezione dei servergroup";
$lang['wiexgrpdesc']		= "Lista dei servergroup ID che non verranno contati dal Ranksystem (separati da virgola. es. 9,10,11)<br>Gli utenti che avranno almeno uno di questi servergroup verranno ignorati.";
$lang['wiexuid']			= "Eccezione degli utenti";
$lang['wiexuiddesc']		= "Lista degli utenti (ID unico) che non verranno contati dal Ranksystem (separati da virgola. es 5GFxciykQMojlrvugWti835Wdto=,YQf+7x/4LJ2Tw5cuQGItsVEn+S4=)<br>Questi utentiverranno ignorati.";
$lang['wigrptime']			= "rank up defintion";
$lang['wigrptimedesc']		= "Definisci qui dopo quanto tempo un utente debba ottenere automaticamente un servergroup predefinito.<br><br>time (seconds)=>servergroup ID<br><br>Important for this is the 'online time' or the 'active time' of an user, depending on setting of the mode.<br><br>Ogni voce deve essere separate dalla successive con una virgola. br><br>Dovrà essere inserito il tempo cumulativo<br><br>Esempio:<br>60=>9,120=>10,180=>11<br><br>Su queste basi un utente ottiene il servergroup 9 dopo 60 secondi, a sua volta il 10 dopo altri 60 secondi e così via...";
$lang['wihladm']			= "List Rankup (Admin-Mode)";
$lang['wihlcfg']			= "Impostazioni Principali";
$lang['wihldb']				= "Impostazioni Database";
$lang['wihlmsg']			= "Impostazioni Messaggi";
$lang['wihlsty']			= "Impostazione Pagina Statistiche";
$lang['wihlts']				= "Impostazioni Teamspeak";
$lang['wihlvs']				= "Impostazione Varie";
$lang['wiignidle']			= "Ignora Idle";
$lang['wiignidledesc']		= "Definisci un periodo di tempo, fino a che il tempo di inattività di un utente verrà ignorato.<br><br>Quando un cliente non fa nulla sul server (=idle), questo tempo viene conteggiato dal Ranksystem. Grazie a questa funzione il tempo di inattività di un utente non sarà conteggiato fino al limite definito. Solo quando il limite definito viene superato, conta da tale data per il Ranksystem come il tempo di inattività.<br><br>Questà funzione è compatibile solo con il tempo di attività.<br><br>Significato La funzione è ad esempio per valutare il tempo di ascolto in conversazioni come l'attività.<br><br>0 = Disabilità la funzione<br><br>Esempio:<br>Ignore idle = 600 (seconds)<br>Un utente ha un idle di 8 minunti<br>Conseguenza:<br>8 minuti in IDLE verranno ignorati e poi il tempo successivo verrà conteggiato come tempo di attività. Se il tempo di inattività ora viene aumentato a oltre 12 minuti (quindi il tempo è più di 10 minuti) 2 minuti verrebbero conteggiati come tempo di inattività.";
$lang['wilog']				= "Path dei Log";
$lang['wilogdesc']			= "La path dei log del RankSystem.<br><br>Example:<br>/var/logs/ranksystem/<br><br>Assicurati che l'utente che hai assegnato (del web server) abbia i poteri per scrivere nella directory (oppure dai direttamente chmod 777 alla cartella log).";
$lang['wimsgmsg']			= "Messaggio";
$lang['wimsgmsgdesc']		= "Imposta un messaggio che verrà inviato come messaggio privato su TS3 per quando un utente raggiunge il Rank Successivo.<br><br>Potrete utilizzare i BB-code di un comunissimo messaggio .<br>http://ts-n.net/lexicon.php?showid=97#lexindex<br><br>Inoltre il tempo trascorsco potrà essere espresso con la stringa:<br>%1\$s - days<br>%2\$s - hours<br>%3\$s - minutes<br>%4\$s - seconds<br><br>Esempio:<br>Hey,\\nComplimenti! hai raggiunto il Ranksuccessivo grazie al tuo tempo online di %1\$s days, %2\$s hours and %3\$s minutes. [B]Continua Così[/B] ;-)";
$lang['wimsgsn']			= "Server-News";
$lang['wimsgsndesc']		= "Define a message, which will be shown on the /stats/ page as server news.<br><br>You can use default html functions to modify the layout<br><br>Example:<br>&#60b&#62; - <b>for bold</b><br>&#60u&#62; - <u>for underline</u><br>&#60i&#62; - <i>for italic</i><br>&#60br&#62; - for word-wrap (new line)";
$lang['wilogout']			= "Logout";
$lang['wimsgusr']			= "Notifica di aumento di rank";
$lang['wimsgusrdesc']		= "Informa un utente con un messaggio privato testuale sul suo aumento di rank.";
$lang['winav1']				= "TeamSpeak";
$lang['winav2']				= "Database";
$lang['winav3']				= "Core";
$lang['winav4']				= "Altri";
$lang['winav5']				= "Messaggio";
$lang['winav6']				= "Pagina delle Statistiche";
$lang['winav7']				= "Amministra";
$lang['winav8']				= "Avvia / Ferma il Bot";
$lang['winav9']				= "Aggiornamento disponibile!";
$lang['winav10']			= "Per favore utilizzare l'interfaccia solo attraverso %s HTTPS%s Una crittografia è fondamentale per garantire la privacy e la sicurezza.%sPer essere in grado di utilizzare HTTPS il vostro web server deve supportare una connessione SSL.";
$lang['wiselcld']			= "Seleziona utenti";
$lang['wiselclddesc']		= "Seleziona gli utenti in base all’ultimo nickname noto. Per farlo devi solo scrivere.<br>Selezioni multiple vanno separate da una virgola, che il sistema fa automaticamente.<br><br>Con la selezione puoi scegliere un’azione con il prossimo passaggio.";
$lang['wishcolas']			= "Servergroup attuale";
$lang['wishcolasdesc']		= "Mostra colonna 'Servergroup attuale' in stats/list_rankup.php";
$lang['wishcolat']			= "Tempo Attività";
$lang['wishcolatdesc']		= "Mostra colonna 'Tempo Attività' in stats/list_rankup.php";
$lang['wishcolcld']			= "Nome Utente";
$lang['wishcolclddesc']		= "Mostra colonna 'Nome Utente' in stats/list_rankup.php";
$lang['wishcoldbid']		= "ID del database";
$lang['wishcoldbiddesc']	= "Mostra colonna 'ID del database' in stats/list_rankup.php";
$lang['wishcolit']			= "tempo in IDLE";
$lang['wishcolitdesc']		= "Mostra colonna 'tempo in IDLE' in stats/list_rankup.php";
$lang['wishcolls']			= "Ultimo volta online";
$lang['wishcollsdesc']		= "Mostra colonna 'Ultimo volta online' in stats/list_rankup.php";
$lang['wishcolnx']			= "Prossimo Rank";
$lang['wishcolnxdesc']		= "Mostra colonna 'Prossimo Rank' in stats/list_rankup.php";
$lang['wishcolot']			= "Tempo Online";
$lang['wishcolotdesc']		= "Mostra colonna 'Tempo Online' in stats/list_rankup.php";
$lang['wishcolrg']			= "rank";
$lang['wishcolrgdesc']		= "Mostra colonna 'rank' in stats/list_rankup.php";
$lang['wishcolsg']			= "Prossimo Servergroup";
$lang['wishcolsgdesc']		= "Mostra colonna 'Prossimo Servergroup' in stats/list_rankup.php";
$lang['wishcoluuid']		= "ID del Utente";
$lang['wishcoluuiddesc']	= "Mostra colonna 'ID del Utente' in stats/list_rankup.php";
$lang['wishexcld']			= "Eccetto gli utenti";
$lang['wishexclddesc']		= "Mostra gli utenti in list_rankup.php,<br>which are excluded and therefore not participate in the Ranksystem.";
$lang['wishexgrp']			= "Eccetto i Servergroups";
$lang['wishexgrpdesc']		= "Mostra gli utenti in list_rankup.php, che sono nella lista 'client exception' e non dovrebbero essere considerati per il Ranksystem.";
$lang['wishhicld']			= "Utenti col massimo rank";
$lang['wishhiclddesc']		= "Mostra gli utenti in list_rankup.php, che hanno raggiunto il più elevato rank nel Ranksystem.";
$lang['wisupidle']			= "Modalità";
$lang['wisupidledesc']		= "Ci sono due modalità di conteggio del tempo per applicare un aumento di rank.<br><br>1) Tempo Online: Tutto il tempo che l'utente passa in TS in IDLE o meno (Vedi colonna 'sum. online time' in the 'stats/list_rankup.php')<br><br>2) Tempo di attività: Al tempo online dell'utente viene sottratto il tempo in IDLE (AFK) (Vedi colonna 'sum. active time' in the 'stats/list_rankup.php').<br><br>Il cambiamento di modalità dopo lungo tempo non è consigliato ma dovrebbe funzionare comunque.";
$lang['wisvconf']			= "Salva";
$lang['wisvsuc']			= "Modifiche salvate con successo!";
$lang['wisvres']			= "Dovrai riavviare il Ranksystem affinché i cambiamenti vengano applicati!";
$lang['witime']				= "Fuso orario";
$lang['witimedesc']			= "Selezione il fuso orario di dove è hostato il server.";
$lang['wits3dch']			= "Canale di Default";
$lang['wits3dchdesc']		= "Il channel-ID cui il bot deve connettersi.<br><br>Il Bot entrerà in questo canale appena entrato nel TeamSpeak server.";
$lang['wits3host']			= "Indirizzo TS3";
$lang['wits3hostdesc']		= "Indirizzo del vostro server Teamspeak<br>(IP o DNS)";
$lang['wits3sm']			= "Slowmode";
$lang['wits3smdesc']		= "Con la modalità Slowmode potrai ridurre lo \"spam\" dei comandi query di TeamSpeak. E previene inoltre i ban per flood nel server Teamspeak.<br>I comandi della query arriveranno con un lieve ritardo in base al ritardo di risposta scelto.<br><br>!!! INOLTRE RIDURRA L'UTILIZZO DELLE RISORSE DEL SERVER !!!<br><br>Questa funzione non è consigliata, se non è richiesta. Il ritardo dei comandi del bot potrebbe causare imprecisione, sopratutto nell'utilizzo dei boost.";
$lang['wits3qnm']			= "Nome del Bot";
$lang['wits3qnm2']			= "2° nome del Bot";
$lang['wits3qnm2desc']		= "Un secondo nome in caso in cui il primo nome sia già in uso.";
$lang['wits3qnmdesc']		= "Il nome con il quale la query si conneterà al TS3.<br>Potrai dare il nome che preferisci.<br> Ricorda che sarà anche il nome con il quale gli utenti riceveranno i messaggi su Teamspeak.";
$lang['wits3querpw']		= "TS3 - Password della Query";
$lang['wits3querpwdesc']	= "Password della query di Teamspeak (di norma viene creata al primo avvio di Teamspeak, guarda qui per modificarla: <a href=\"https://support.teamspeakusa.com/index.php?/Knowledgebase/Article/View/276/16/how-do-i-change-my-serverquery-admin-password\">CHANGE QUERY PASSWORD</a><br>.";
$lang['wits3querusr']		= "TS3 - Utente della Query";
$lang['wits3querusrdesc']	= "Il nome utente della Query scelta<br>Di default è serveradmin<br>Ma se preferisci potrai creare un ulteriore query solo per il Ranksystem.<br>Per vedere i permessi necessari alla Query guarda:<br>http://ts-n.net/ranksystem.php";
$lang['wits3query']			= "TS3 - Porta della Query";
$lang['wits3querydesc']		= "La porta per l'accesso delle query a Teamspeak<br>La porta di default è 10011 (TCP)<br>Se non è la porta di default e non sai che porta possa essere guarda all'interno del file 'ts3server.ini' nella directory principale del server Teamspeak dove troverai tutte le informazioni sul server.";
$lang['wits3voice']			= "TS3 - Voice-Port";
$lang['wits3voicedesc']		= "La  voice port del vostro Teamspeak<br>Di default è 9987 (UDP)<br>Questa è inoltre la porta con cui vi connettete al TS3.";
$lang['wiupcheck']			= "Controlla aggiornamenti";
$lang['wiupcheckdesc']		= "Se le funzione 'Controlla aggiornamenti', la lista di utenti inseriti (ID unico dell'utente) riceveranno una notifica su Teamspeak (come messaggio privato), quando sarà disponibile uin aggiornamento.";
$lang['wiuptime']			= "Intervallo di cotrollo aggiornamenti";
$lang['wiuptimedesc']		= "Inserisci qui ogni quanti secondi il Ranksystem verificherà se vi sono aggiornamenti disponibili.<br>Attenzione, Ogni utente inserito riceverà la notifica di aggiornamento attraverso un messaggio privato su Temaspeak. Se nessuno degli utenti inseriti sarà online, Il Ranksystem proverà ad inviare il messaggio nell'intervallo di tempo successivo.";
$lang['wiupuid']			= "Recipiente";
$lang['wiupuiddesc']		= "La lista di utenti (dovrà essere inserito l'ID unico dell'utente(i) es. YdicUS4yofeBEONN7J3FeLic8b4=,RiGqBf8hU1kbCV/vwfPL0rzAwZQ=), che verranno informati di eventuali aggiornamenti attraverso un messaggio privato su Teamspeak.";
$lang['wivlang']			= "Lingua";
$lang['wivlangdesc']		= "Choose a default language for the Ranksystem.<br><br>The language is also selectable on the websites for the users and will be stored for the session.";
?>