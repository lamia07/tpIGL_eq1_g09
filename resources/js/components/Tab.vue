<template>
<div>
<v-card class="card" color="blue"
  >
    <v-card-title class="text">
      Liste des Etudiants
      <v-spacer></v-spacer>
      <v-text-field
       class="text"
        v-model="search"
        label="Search" 
        color="white"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table 
      :headers="headers"
      :items="Matricules"
      :search="search"
    ></v-data-table>
  </v-card>
  </div>
</template>
<script>
export default {

     data () {
      return {
        search: '',
        bars: [
        { class: '' },
        { class: '' },
        { class: 'primary' },
        { class: 'elevation-0' },
      ],
        headers: [
          {
            text: 'Matricules',
            align: 'left',
            sortable: true,
            value: 'matricule',
          },
          {text: 'name', value: 'name'},
          { text: 'Groupe', value: 'groupe' },
          { text: 'Moyenne', value: 'note' },
          { text: 'Nombre Absence', value: 'abs' },
        ],
        Matricules: [
          {
            matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
            matricule: '17/0194',
            name: 'lilia Mezani',
            groupe: 6,
            section: 'B',
            note: 12,
            abs: 4,
          },
          {
            matricule: '17/0100',
            name: 'Romaissa Kessi',
            groupe: 2,
            section: 'A',
            note: 15,
            abs: 0,
          },
          {
            matricule: '17/0055',
            name: 'Lamia Kessi',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
            matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
            matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
            matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
            matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
           matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
          {
           matricule: '16/0054',
            name: 'Chaimaa Medjadji',
            groupe: 9,
            section: 'B',
            note: 15,
            abs: 0,
          },
        ],
      }
    },
  }
  </script>
  <style scoped>
  .card{
    position: relative;
    fill: #0080FF;
    margin: 70px 30px 40px 150px;
  }
  .text{
  color: white;
}
  </style>