---
title: "Kmom01"
sidebar: "reports"
...
# Kmom 01 - Ramverk

Så var det dags för en ny termin och en ny kurs. Jag har faktiskt längtat lite även när jag legat på stranden i solen.

Det här inledande momentet kände som en rimlig uppfräshning över PHP och Anax. Inga egentliga problem där mer än att jag höll på en stund och testade lite olika vyer, layouter och templatefiler. Modifierade min huvud-layout så den ändrar lite klasser i htmlen beroende på om det finns en sidebar eller inte.

Kändes som ett lagom moment med flera bra artiklar och videos att titta på. 

## PHP: The Right Way - Kunskapsanalys

Till att börja med känns artikeln “PHP The Right Way” som en bra översikt och guide till PHP och hur man bör använda och implementera språket. En bra uppfräshning av konventioner och språkets struktur.

Efter att ha läst artikeln kan jag konstatera att jag känner igen och har hört talas om mycket men att det samtidigt är flera delar som jag inte känner att jag behärskar fult ut.

### Styrkor

Efter 2 kurser nu här på BTH där vi använt oss utav PHP känner jag att jag har en bra grund och bas i språket. Att skriva kod i PHP känns nu helt rätt och oproblematiskt.

Installation, pakethantering och hur man kommer igång känner jag inte är några problem. Jag har installerat och kört igång PHP flera gånger både på Windows med hjälp XAMPP och på Linux för sig själv. Även pakethantering med Composer och att söka packet på packagist känns som jag har god koll på.

När det kommer till kodstil och namespaces så tycker jag även där att jag har bra koll på läget. Jag har bläddrat igenom flera av FIG’s PRS:er och försöker därmed följa namngivning och kodstilen som beskrivs däri. Namespaces är användbart för att se till att klasser, funktioner och metoder inte krockar med varandra när man använder sig av flera olika paket i ett projekt.

Jag känner även att jag har rätt bra koll på att jobba mot databaser med PHP med hjälp av PDO då det är något som vi gjort i samtliga tidigare kurser. Jag har koll på prepared statements och hur och varför man ej bör skicka in vad som helst i en SQL-fråga. Detta för att undivka SQL-injections och öppna upp för att användare kör otillåten kod mot ens databas.

Här kommer vi också in på säkerhet och också här känner jag att jag har en grundläggande koll på säkerhet i alla fall det som beskrivs i den här artikeln. Jag vet hur jag hash:ar och jämför lösenord och hur, var och varför man bör validera och filtrera inkommande data få att inte otillåten kod kommer att köras.

### Svagheter

För det första så är det en hel del i dokumentet som jag ännu inte har gått igenom. Kapitlen Dependency Injection, Servers and Deployment, Vitualization och Caching är helt nya och obekanta för mig. Jag skulle gärna ge mig in i dessa om tid och möjlighet finnes.

Bland det som jag har berört tidigare men som jag känner mig lite tveksam till och där jag själv vet med mig att jag behöver lära mig mer är bland annat UTF-8, Localization, Errors and Exception, Testing och Documenting med PHPDoc.
UTF-8 och Localization har jag berört tidigare i samband med arbete mot databas och användandet av multibyte-funktioner så det känns ändå som jag har hyffsad koll på detta om än inte tillräckligt.

Det senare med felhantering, testning och dokumentering är också saker som jag berört tidigare. Jag vill dock öva mer på dessa och hoppas kunna göra just det och ”nöta” in det under den här kursen.

### Fokus

Under den här kursen  vill jag förutom att lära mig det nya som jag hoppas kursen kommer ta upp, som Dependency Injection och Servers and Deployment, även fokusera på mängdträning av PHP i stort då det alltid är bra samt verkligen se till att felhantering, testning och documentering av kod blir något som jag verkligen kan och faller sig naturligt.


## Ramverksundersökning 2017

Min undersökning om de mest populära ramverken för 2017 ger en utklassningsseger till Laravel som verkar vara det absolut mest rekommenderade och populära ramverket.

Därefter kommer Symfony och Codeigniter på delad andra plats. Därefter finns flera andra ramverk längre ner i listan som Phalcon, CakePHP och Zend.

En del av Laravels popularitet verkar vara att det är lättanvänt och att den mesta funktionalitet man önskar sig under utvecklandet finns integrerat, som verktyg för att lätt arbeta med databaser. Därutöver verkar många uppskatta Laravel’s goda dokumentation och community samt att de själva publicerar videos där de visar hur man använder sig av ramverket.

Det verkar således som att klyftorna har ökat i ramverksvärlden och de stora har blivit ännu större.

Det jag dock kan se och som är något som nämns är att man nu börjar tänka och utveckla mer ramverkslöst. Det vill säga att man kanske inte tycker sig behöva hela Laravel för att utveckla en enklara app/sida. Det verkar som att utvecklandet går mer och mer mot att bli ramverkslöst där man själv väljer och importerar de moduler som man tycker sig behöva i sitt projekt.

**Källor**

* [https://www.webhostface.com/blog/best-php-frameworks-of-2017/]()
* [https://www.sitepoint.com/the-state-of-php-mvc-frameworks-in-2017/]()
* [https://coderseye.com/best-php-frameworks-for-web-developers/]()


## Erfarenhet angående communities 

Min erfarenhet om olika communities inom programmering sträcker sig mest till Stack-overflow, dbwebb.se och övriga blandade sidor som man hamnar in på efter googlande. Det jag generellt kan säga är att det flesta man möter är väldigt hjälpsamma och snabbt kommer med förslag och lösningar till de problem man framför. Många verkar ha en vilja av att lära med sig och också lära ut och försöka få frågeställaren att själv tänka till och inte bara ge en färdig lösning. Man hjälper varandra mycket helt enkelt.

Efter att ha sett videon om PHP Communityt förstår jag dock att det där har bildats en hel del sub-grupper bland de som tycker olika om olika ämnen. Där verkar det sedermera ha utvecklats en hätska ton mot oliktänkare. Det här är dock inte något som jag har stött på under min tid och jag hoppas att programmerare är ett släkte som mer rationellt kan resonera och bemöta andra åsikter och kritigk.

## En ramverkslös värld 

I grund och botten tror jag att om vi kan komma till ”en ramverkslös värld” så är det mycket bra. Man kan då välja att ta in just de paket/moduler som man själv vill använda sig av och som passar bäst för ens eget projekt. Man slipper därmed dra in en massa ”bloat” och olika bibliotek i sitt projekt som egentligen inte behövs och som bara följer med ramverket. 

En annan del är också att det blir lättare för de med en bra ide eller en bra kod att nå ut till andra och få andra att använda koden när folk vet hur den fungerar och hur den skall integreras.

Det som krävs är dock en samsyn och standard för bibliotek/moduler så att man kan förvänta sig vad ett sorts bibliotek ska utföra och implementeras. Exempelvis en router. 
Häri ligger också problemet. Att få folk att följa samma standard i deras kod. 

## Kommentarssystem

Jag har surfat runt och kollat runt på lite olika typer av kommentarssystem som redan finns för att hämta inspiration. Stack-overflow, Disqus, Twitter och Facebook med flera. Känns som att jag nu börjar få ett bra tänk över hur strukturen kan komma att se ut och vilken funktionalitet som behövs. 

Stack-overflow-typen av kommentarssytem skulle vara kul att ge sig på.