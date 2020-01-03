---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_41d2f7697c6118f36f8b676e5bd19ea0 -->
## Login using the given user ID / email.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/_dusk/login/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/_dusk/login/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _dusk/login/{userId}/{guard?}`


<!-- END_41d2f7697c6118f36f8b676e5bd19ea0 -->

<!-- START_6375e7300024aae0f6af283b4a72cb1b -->
## Log the user out of the application.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/_dusk/logout/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/_dusk/logout/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET _dusk/logout/{guard?}`


<!-- END_6375e7300024aae0f6af283b4a72cb1b -->

<!-- START_09dcf3e9a9b6585fa40e4ead6c3c858a -->
## Retrieve the authenticated user identifier and class name.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/_dusk/user/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/_dusk/user/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET _dusk/user/{guard?}`


<!-- END_09dcf3e9a9b6585fa40e4ead6c3c858a -->

<!-- START_906a2ebd7bc7b470f1a5c61b2c62c72d -->
## api/AjouterEtud
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/AjouterEtud" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/AjouterEtud"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/AjouterEtud`


<!-- END_906a2ebd7bc7b470f1a5c61b2c62c72d -->

<!-- START_64ad2446c27f07087486fb2d3e43b696 -->
## api/AjouterEtud
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/AjouterEtud" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/AjouterEtud"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/AjouterEtud`


<!-- END_64ad2446c27f07087486fb2d3e43b696 -->

<!-- START_2b34b161b95f6295c473964427dd78db -->
## api/AfficherAbs
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/AfficherAbs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/AfficherAbs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "matricule": "17\/0052",
        "nom": "kessi",
        "prenom": "lamia",
        "date": "2020-01-21",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 2,
        "matricule": "17\/0162",
        "nom": "ketfi",
        "prenom": "ranya",
        "date": "2019-01-21",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 3,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-01-21",
        "nom_seance": "Alsdd",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 4,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-03-30",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg3"
    },
    {
        "id": 5,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-03-26",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg2\r\n"
    }
]
```

### HTTP Request
`GET api/AfficherAbs`


<!-- END_2b34b161b95f6295c473964427dd78db -->

<!-- START_4a9ce13e24b0c7f6643ad05cdb347585 -->
## inscription
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/inscription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/inscription"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET inscription`


<!-- END_4a9ce13e24b0c7f6643ad05cdb347585 -->

<!-- START_650d9024ddf2f17483a63e385e679a0c -->
## inscription
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/inscription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/inscription"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST inscription`


<!-- END_650d9024ddf2f17483a63e385e679a0c -->

<!-- START_d7807a90385f4b4c08db93f5c7c9fa9d -->
## Admin
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/Admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/Admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "matricule": "17\/0052",
        "nom": "kessi",
        "prenom": "lamia",
        "date": "2020-01-21",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 2,
        "matricule": "17\/0162",
        "nom": "ketfi",
        "prenom": "ranya",
        "date": "2019-01-21",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 3,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-01-21",
        "nom_seance": "Alsdd",
        "nom_groupe": "1CSg1"
    },
    {
        "id": 4,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-03-30",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg3"
    },
    {
        "id": 5,
        "matricule": "17\/0028",
        "nom": "hamani",
        "prenom": "sirine",
        "date": "2019-03-26",
        "nom_seance": "Archi",
        "nom_groupe": "1CSg2\r\n"
    }
]
```

### HTTP Request
`GET Admin`


<!-- END_d7807a90385f4b4c08db93f5c7c9fa9d -->


