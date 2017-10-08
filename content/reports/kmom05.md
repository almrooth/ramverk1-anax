---
title: "Kmom05"
sidebar: "reports"
...
# Kmom 05 - Modul på Packagist


## Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?

Både bra och dåligt. Att lyfta ut koden i sig var inget problem och det var rätt enkelt att få med alla filer som behövs för modulen. Jag hade lite problem med mina vyer som använde sig av egna funktioner som jag hade i en helperklass i $app. Funktionerna som mestadels hanterade skapande av länkar bytte jag sen ut mot att använda sig av $di->url->create() direkt istället. Sen fick jag också tänka till lite över vad som skulle ingå i modulen. Jag bestämde mig för att less-is-more och tog inte med min egna pageRender-klass som jag använder i me-sidan och inte heller alla vyer från me-sidan. Inte heller styling i form av CSS följer med utan är något som man får anpassa själv istället.

Som det är nu är jag rätt nöjd med min modul som hanterar användare, inloggning och samtliga kommentarsvyer som den ska.

Ett lite kneppigare problem som jag stötte på var däremot när jag fick för mig att byta namespace på modulen. Av någon anledning så höll det på och strula en hel del i min dev-installation som jag testade. Tillslut gjorde jag om hela den installtionen och då fungerade det.

## Flöt det på bra med GitHub och kopplingen till Packagist?

Inga problem här. Det gick båda snabb och smidigt att få till ett repo som nu alla kan ta del av. Roligt och man känner sig mer och mer som en riktig utvecklare nu när man publicerat något.

## Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?

Inte heller här så blev det några problem. Jag följde min egenskrvina installationsmanual och det gick smärtfritt. Tog bort min modul och src och gjorde sen composer require på den istället och sen kollade av att filer låg där de skulle och såg ut på rätt sätt.

## Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?

Det här var lite komplicerat då det var ett tag sen vi hållit på med tester. Här blev det en hel del läsa på innan jag kom igång för att fräscha upp minnet. Jag tycker själv ännu att mina controller-klasser är väldigt svårtestade så de lämnade jag helt till senare. 

Jag fick hade även lite problem med databasen då tanken med modulen och testerna är att de ska kunna köras direkt utan en färdig installation av modulen. Således bytte jag ut min SQL-databas mot SQLite som nu körs i minnet och därmed möjliggör test utan installtion och databaskonfiguration.

Detta och att komma igång med testerna tog en hel del tid som gjorde att jag inte han med att testa så mycket av min kod. Jag nöjde mig med att testa igenom min User-klass och fick där 100 % i kodtäckning.

## Några reflektioner över skillnaden med och utan modul?

Jag gillar tänket med modulen som man nu kan återanvända lätt i flera olika projekt på ett enkelt sätt. Dock tycker jag inte att koden i me-sidan har förändrats direkt. Det ända som har skett är att den är flyttad till en annan mapp.