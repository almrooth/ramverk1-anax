---
title: "Kmom02"
sidebar: "reports"
...
# Kmom 02 - MVC

## MVC

Jag har ingen tidigare helt ren erfarenhet av MVC. Dock känns det som att jag tidigare har strukturerat kod på ett sätt som i vissa fall kan liknas och inspireras av MVC. 

Som i kurserna med oopython och oophp där vi i alla fall haft som en vy som vi skickat data till. Det som i de fallen varit lite flytande och inte direkt kommit upp i MVC  är att där inte funnits någon direkt distinktion mellan modell och kontroller. 

MVC känns dock som ett bra koncept. Uppdelningen gör det enkelt att skapa kod som inte är beroende av varandra och som därmed kan återanvändas. Kontrollern är som en sammordnande spindel i mitten som hanterar data mot olika modeller och sedan skickar data till vyerna för att presenteras. I alla fall i fallet med den här kursen än så länge. Som lästs finns andra vägar för datan att färdas. Som mellan modellen och vyn direkt.

Jag använde här kursmaterialet som källa.


## SOLID

Begreppet SOLID sitter inte helt än. Det känns rätt krångligt med vissa delar medan andra känns mer enkla att förstå och självklara. 

* **S**ingle responsibility principle – Klasser ska ha endast ett skäl till att förändras. Den här principen är rätt enkel att förstå och betyder klasser endast ska ha en uppgift att utföra.

* **O**pen closed principle – Klasser ska kunna utökas men inte modifieras. Den här principen har jag inte greppat helt och hållet.

* **L**iskov substitution principle – Varje klass ska kunna ersättas av sin motsvarande subklass.

* **I**nterface segregation principle – En klass ska inte behöva implementera fler interfaces än den behöver. Också en av de enklare principerna och betyder att en klass inte ska behöva ha onödiga beroenden som inte används.

* **D**ependency inversion principle – Klasser ska inte vara beroende av varandra utan istället av interfaces vilket gör de mer utbytbara och modulära.

Källa (förutom kursmaterialet):

* [https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design](https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design)
* [http://stillinbeta.se/3/](http://stillinbeta.se/3/)


## REM-servern

Jag hade inga problem med att integrera REM-servern i sidan och allt fungerar som det ska. Jag tycker att så som koden var updelad i allt från routrarna till kontroller till modell och vy var lätt och överskådligt.

Mycket av koden relaterad till sessioner kändes igen från föregående kurser i PHP. 


## Kommentarsmodulen 

Med min kommentarsmodel så strukturerade jag först och främst upp den som REM-servern.
En fil med routrar som anropar min CommentController och som i sin tur anropar min modell (CommentSession). I denna första version så jobbar jag mot sessionen där jag lagrar datat. Tanken här är att jag senare ska kunna göra en motsvarande modul innehållande metoder med samma namn när jag går över till att jobba mot en databas. 

Min kommentarsmodul har stöd för full CRUD-funktionalitet för kommentarerna samt hämtar också avsändarens gravatar. Det jag direkt kan se är att min kod för att hämta gravataren ligger i min modell CommentSession och därmed går i strid med SOLID's första princip. Jag får här ta och bryta ut den till en egen modell frammåt.
