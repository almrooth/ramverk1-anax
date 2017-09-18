---
title: "Kmom03"
sidebar: "reports"
...
# Kmom 03 - DI

### Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?

Jag tycker det känns helt naturligt att jobba med dessa 3 begrepp. Alla 3 känns vid närmare eftertanke rätt självklara. 

Som med dependency injection. Det är klart att en klass inte ska ha tillgång till mer än den behöver. Och att då injecta det som behövs rakt in i klassen gör att man kan välja vilken klass som då injectas beroende på situation. Och så länge som klasserna implementerar de interface som behövs så kommer det att lira. Hela detta gör att man får en störe frihet att återanvända klasser i olika sammanhang.

När det kommer till lazy loading känns det rätt vettigt att inte instansiera klasser förräns de behövs. Det sparar både tid och prestande. Samma där om man väljer att spara instansen och dela den under samma körning eller om man skapar en ny varje gång den behövs.

Service locator tycker jag fortfarande är lite luddigare. Men om jag förstått det rätt är det en central del där man definiera vilka klasser som finns och löser deras beroenden. Det kan ju på ett sätt bli mer lättöverskådligt när man gör allt sådant på en och samma plats men det skapar också ett beroende i sig. Vidare leder det till mer kod som behöver skrivas. 


### Hur känns det att göra dig av med beroendet till $app, blir $id bättre?

Jag vet inte om jag tycker det känns bättre med $id än $app. Som det är nu känns sidan lite liten för att det ska märkas tror jag. Känns mest som att man skriver lite annorlunda bara. Sen blir det lite mer kod att skriva i och med att man för att komma åt en klass som finns i $di nu måste gå igenom $di's get-metod.


### Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?

Helt okej. Vartefter vi skriver om koden känns det som man får bättre och bättre koll på ramverket och sin sida.

Nu tog det sin lilla tid i och med att man var tvungen att ändra om i controllerklasser och lite här och där. Det var lite meckigt och svårtestat under resans gång då jag var tvungen att göra klart nästan hela refaktoreringen innan jag kunde testa och se om det fungerade. Efter lite buggar och klurande löste det sig dock.

När det kommer till hur kodstrukturen nu ser ut så känner jag mest att det blivit annorlunda i och med alla dessa arrayer. Förhoppningsvis ser jag ljuset under kommande moment.


### Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?

Jodå. Jag skrev om mitt kommentarssystem till att nu använda sig av $di samt injecta sessionen i modellen och det gick rätt bra. Jag hade lite problem ett tag vilket grundade sig i att sessionen inte var startad. När jag väl hittade felet löstes det snabbt.


### Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?

Jag avvaktar med databasintegrationen till nästa kursmoment. Jag har dock börjat skissa på hur jag ska lägga upp mina tabeller i databasen, med vilka kolumner etc.


### Allmänna kommentare kring din me-sida och dess kodstruktur?

Strukturen på me-sidan tycker jag nu börjar kännas riktigt bra överlag. Det gjorde den redan i förra moment i och för sig. 

Det känns nu som vi har en bra uppdelning av klasser i controllerklasser, modeller och sen har vi templatefiler, routefiler och lite annat smått och gott. Som spindeln i nätet av det hela har vi nu vår $di. Det gör det rätt lätt att veta vart man ska in och peta för att integrera en ny klass eller modell. 

Snyggt och bra uppdelat enligt MVC-tänket.
