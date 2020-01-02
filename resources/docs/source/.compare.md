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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_64ad2446c27f07087486fb2d3e43b696 -->
## api/AjouterEtud
> Example request:

```bash
curl -X POST \
    "http://localhost/api/AjouterEtud" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/AjouterEtud"
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
    -G "http://localhost/api/AfficherAbs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/AfficherAbs"
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
    -G "http://localhost/inscription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/inscription"
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

<!-- START_d7807a90385f4b4c08db93f5c7c9fa9d -->
## Admin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin"
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


