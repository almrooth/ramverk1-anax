---
title: "Kmom07/10"
sidebar: "reports"
...
# Kmom 07/10 - Projekt

Som slutprojekt valde jag att göra en stack-overflowkopia med temat av ett investerarforum, Allt om aktier.

## Krav 1 - 3 - Grunden

Jag började med att scaffolda fram en anax-mall. Sen körde jag "composer require" på min comment-modul så att den kom in i projektet.

Ganska så snabbt märkte jag att jag dels behöver lägga till en hel del ny klasser, modeller och kontroller samt även modifiera min egna comment-modul. För att göra detta la jag till ett nytt namespace "App" som sedan det mesta ligger under i min src-katalog.

I individuellt projekt-kursen som går paralellt med denna har jag jobbat med Laravel en hel del och då jag tycker att där finns flera bra lösningar så har jag därmed hämtat en hel del inspiration därifrån.

Jag har skrivit många egna metoder i modell-klasserna som jobbar med lite med varandra beroende på. Exempelvis om man ska hämta en fråga "$question" så kommer man även att få med användaren som skapat frågan som "$question->user". På så vis blir det lätt att i vyerna visa den data som kan tänkas behövas och som är relaterd till varandra. 

För krav 1-3 så uppfyller min sida samtliga krav. 

Först och främst så om man inte är inloggad så kan man inte skapa eller redigera något innehåll på sidan. Man kan dock se frågor, svar, kommentarer, taggar och användare.

Jag har om-sida och en startsida som visar de 5 senaste frågorna, de mest aktiva användarna och de mest populära taggarna.

Går man in på användare så ser man vilka användare som finns i systemet och man kan även gå vidare och se dess profiler. Är man inloggad kan man även redigera sin epost.

Jag har en sida för taggar där man ser vilka taggar som finns och hur många frågor som finns med respektive tagg. Här kan man även klicka sig vidare och få en viss taggs frågor.

Under frågesidan ser man samtliga frågor. Här ser man vem som skapat frågan och när, frågan i sig, frågans taggar, hur många kommentarer och svar en fråga har samt frågans betyg.

När man är inloggad så tillkommer menyer ovanför frågorna, svaren och kommentarerna med olika val som man kan göra. Som att redigera, ta bort eller acceptera en fråga. Att acceptera en fråga kan endast frågeskaparen göra. Att redigera eller ta bort en fråga kan även admin göra. Tar man bort en fråga så tas även dess tagg, kommentarer och svar bort.

All text i frågorna, kommentarerna och svaren kan skrivas i markdown. Taggar kan skrivas separerade med space eller , eller både och. Den ev. långa tag-strängen parsas med reg.ex. till separata taggar.

Det finns även, om man är inloggad som admin, ett lättare admingränssnitt för att redigera och ta bort användare och frågor. Just användare kan man inte ta bort utan de blir istället inaktiverade och kan inte längre logga in. De kan sedan aktiveras igen och därmed logga in igen.

Projektet och dess källkod finns på GitHub med en readme som beskriver hur man tar ner och gör den till sin egen. Där finns även badges för travis och scrutinizer som är de verktyg jag gillar bäst.


## Krav 4 - Frågor

Här uppfyller jag samtliga krav.

Den användare som skapat en fråga kan märka ut svar som accepterat. Flera svar kan märkas ut som det. Det är löst med en boolean i databastabellen för frågor.

En användare kan rösta på frågor, svar och kommentarer. Man kan rösta upp till +1 och ned till -1. Rösterna har en egen tabell som lagrar vilken användare som röstat på vad och betyget.

Svaren på en fråga kan sorteras antingen med nyaste först eller med den som har högst betyg först. Här löste jag det med en variable i querystringen och antingen en fråga med "orderBy" eller en egen funktion som sorterar de färdiga svaren baserat på betyg. 


## Krav 5 - Användare

Här uppfyller jag samtlig krav.

För det här kravet så skapade jag en metod i min användarmodellklass som hämtar hur många av respektive fråga, svar och kommentar som användaren har skrivit.

Jag har även en metod som först hämtar samtliga frågor, svar och kommentarer som en användare har skrivit och sedan vad varje av dessa har för betyg och räknar ihop detta till användarens betyg.

* En fråga ger 5 poäng
* Ett svar ger 10 poäng
* En kommentar ger 5 poäng

Respektive fråga, svars, kommentars betyg adderas sedan med motsvarande poäng.


## Krav 6 - Design och vyer

Här tänker jag mig att jag bör ha tjänat ihop kanske 5 poäng iaf på min design och hur jag bygg tupp vyerna.

Jag har jobbat rätt mycket på designen för att få till en stilren och clean design som är användarvänlig och lättöverskådlig. Jag har här inte använt mig utav något ramverk utan allt är stylat i CSS från grunden.

Jag har även i brutit ut exempelvis frågor till en egen vy-fil som sedan inkluderas i vyn med samtliga frågor. Jag märkte snabbt att det blev mycket kod i vyerna. Främst med alla olika element som ska in och även med logiken för att visa olika delar av vyerna baserat på om man är inloggad eller ej eller om man är inloggad som admin eller vanlig user etc. 

På det här viset är det rätt lätt att helt styla om hur exempelvis en fråga ska se ut om man så vill.


## Allmänt

Det här blev ett rätt långt projekt ändå. I alla fall när man vill börja få med de optionella kraven.

Det har dock varit kul att få skapa en så pass avancerad site som det ändå är från grunden. Också bra att få in tänket med MVC där jag verkligen har delat upp i de olika delarna.

Jag har inte skrivit någon "ren" sql-kod någonstans utan för alla frågor har jag använt mig av dels active record samt query-buildern. Query-buildern i de fall ingen lämplig metod fanns i active record.

Databasmässigt har jag hållit mig ifrån att skriva procedurer och vyer utan har istället i modellerna skrivit frågor med joins och annat vilket jag tycker har fungerat bra.

Projektet som helhet tycker jag avslutade kursen på ett bra sätt. Dock kanske det blev lite väl stort när man försöker ge sig på de optionella kraven. Då så har i alla fall jag tappat lite kvalitet i koden och kommentering av koden kan man se rätt tydligt har gått från god till obefintlig i vissa fall. Samma här när det kommer till SOLID-tänk som jag nog inte efterlever så särskilt bra.

Det som jag kan tänkas sakna är väl lite enhetstester. Men för att det ska komma in behöver något annat tas bort vilket kan vara lite svårt.

## Kursen

Det här har varit en riktigt bra kurs. Känns som man nu har riktigt bra koll på hur ramverk och dess delar hänger ihop. Även hur man kan integrera moduler in i sitt projekt och jobba med MVC.

Även DI och testning med externa verktyg har varit både kul och nyttigt. Hade dock önskat att testning återigen kanske fick lite mer plats. Speciellt hur man gör för att testa mot databaser och hur man "mockar" saker.

När det kommer till kursmaterialet håller det som alltid hög klass. Bra med föreläsningar och lärares närvaro i forum och på gitter. Det känns denna gången också som att det har varit lite mer externt material som kursmaterial. Detta känns helt okej och visar kanske på att man börjar bli en mer självgående och bättre utvecklare.

På det hela en mycket bra kurs som av mig får 9/10.


**Inloggning**

doe / doe

admin / admin

[Allt-om-akter](http://www.student.bth.se/~toab16/dbwebb-kurser/ramverk1/me/kmom10/allt-om-aktier/htdocs/)

[Redovisning](https://www.youtube.com/watch?v=Wv_U2CUcJF4)
