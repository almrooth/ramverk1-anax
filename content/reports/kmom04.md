---
title: "Kmom04"
sidebar: "reports"
...
# Kmom 04 - Databasdrivna modeller

### Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?

Mycket bra faktiskt. Inga konstigheter med databashanteringen utan där kändes det som man hade hyffsad koll sen OOPHP-kursen. Rätt kul att komma tillbaka och jobab mer med just databaser igen.

Att bryta ut formulären separat på det sätt som vi gjorde i detta moment tycker jag var riktigt smidigt. Istället för en mängd kod i kontrollerna som hanterar formulär så har de nu en egen fil/klass vilket känns mycket bra. Att varje formulär också har en funktion i anslutning till sig som körs när formuläret postas gör det lätt att se vad som hänger ihop med vad.

Det jag kan känna är lite mindre bra är att det blir en hel del med olika filer med alla formulärklasser. Vilket kan göra projektet något mer svårt att navigera/överblicka.

### Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?

Jag har hållit på lite med liknande upplägg i projektkursen där jag gör projeketet i Laravel och jag måsta säga att jag tycker det är riktigt smidigt. Det blir lättare att se sina rader i tabellerna som objekt och därmed kan man knyta metoder direkt till objekten som då hanterar olika saker. Relationer kan objekt sinsemellan tycker jag också kan bli rätt snyggt att anropa när man exempelvis har en kommentar som har en relation till en användare och man då för att nå användaren bara behöver göra som ett metodanrop ex. komment->user() eller likn. Dock krävs det lite kodning här för att sy ihop det om man inte jobbar i ett ramverk som har det fördefinierat.

Nackdelar som jag känner är väl att man blir mer bortkopplad från databasen. Känns inte riktigt som man har samma kontroll på vad som sker vid alla anrop etc. Dock går det ju ändå att köra rå SQL-kod när så behövs så det är ju inte hela världen.

### Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?

Nu börjar jag få till en rätt bra stuktur kan jag tycka där anropen går via routrar ner i controllerklasser som sedan slussar vidare till modeller och tillbaka. Under det här momentet skrev jag om en hel del av min kod till kommentarssystemet just för att vara likt active record och bokexemplet och jag tycker det ser riktigt städat och snygg ut.

La till lite metoder i min Comment-klass som gör att den kan anropa och kommunicera direkt med användaren som den är beroende av och hämta epost för gravatarlänk etc.

### Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?

Tidigare än nu under hösten har jag ingen erfarenhet av ORM's men efter att ha jobabt lite med det både under detta kursmoment och i Laravel så tycker jag det är riktigt smidigt. Speciellt för enklare grejer som CRUD har jag än så länge inte känt något behov av att skriva ren SQL-kod. Dock är det lite småsynd att man tappar lite i hur mycket SQL man då skriver och kanske inte har riktigt lika bra koll på det när man väl behöver. Slår dock åt andra hållet också och är ett bra verktyg för de som kanske inte är så bra på just SQL att ändå jobba mot databaser.

### Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?

Absolut. Väldigt smidigt att han lite färdiga mallar som man vid behov snabbt på ett autmoatiserat sätt kan få ner. Gör att uppstarten och kasnke mycket av repetitivt och tidsödande grundarbete kan snabbas upp.