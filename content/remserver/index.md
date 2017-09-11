# REM Server

REM servern simulerar ett REST API.

Data sparas i sessionen.

Adressen till remservern är - [länk](/~toab16/dbwebb-kurser/ramverk1/me/anax/htdocs/remserver/api/)
```
remserver/api/
```

Restarta servern - [länk](/~toab16/dbwebb-kurser/ramverk1/me/anax/htdocs/remserver/api/init)
```
remserver/api/init
```

Förstöra sessionen - [länk](/~toab16/dbwebb-kurser/ramverk1/me/anax/htdocs/remserver/api/destroy)
```
remserver/api/destroy
```

Det finns en färdig datamängd (users) - [länk](/~toab16/dbwebb-kurser/ramverk1/me/anax/htdocs/remserver/api/users)
```
remserver/api/users
```

Individuella poster ur datamängden - [länk](/~toab16/dbwebb-kurser/ramverk1/me/anax/htdocs/remserver/api/users/2)
```
remserver/api/users/{id}
```

Skapa egna poster - POST
```
remserver/api/{dataset}
```

Uppdatera post - PUT 
```
remserver/api/{dataset}/{id}
```

Radera post - DELETE
```
remserver/api/{dataset}/{id}
```
