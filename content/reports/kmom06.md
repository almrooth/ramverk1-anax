---
title: "Kmom06"
sidebar: "reports"
...
# Kmom 06 - CI

### Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?

Inte innan jag började här på BTH. Dock så har vi ju haft automatiserade tester med i de flesta kurser än så länge som har körts genom dbwebb-kommandot och "make test".

### Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?

I stort tycker jag det är positivt. Man får snabbt en överblick över sin kod och om något är fel eller mindre bra. Som i fallet med phpcs och andra så får man även bra tips på vad som kan förbättras. 

Att skriva tester kan dock bli rätt tidskrävande. Speciellt om man vill uppnå hög kodteckning etc. Här måste man nog komma till en bra kompromiss med hur väl testat/täckt koden behöver vara.

### Hur stor kodtäckning lyckades du uppnå i din modul?

Jag fick upp kodtäckningen på hela modulen till 44%. På mina klasser för users och comments så fick jag dock upp den till 100%. Det som var svårtestat var dels controller-klasserna som anropar flera andra klasser och även callbacksen på HTML-formulären som hämtar data från POST och även där anropar andra klasser.

### Berätta hur det gick att integrera mot de olika externa tjänsterna?

Lätt och smidigt. Jag följde videorna i stort och det vållade inga problem. Det tog en stund när man vill kolla igenom de olika siterna och hur de funkar och vilker feedback de ger men det var roligt och känns som att det är användbart.

### Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda

Scrutinizer helt klart. Här fick man dels kodtäckningen, ett roligt betyg på koden samt även förslag på var man ska kolla vidare för att göra förbättringar. De andra tjänsterna verkade mest kolla så testerna verkligen gick igenom.
