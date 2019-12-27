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
import axios from 'axios'
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
          {text: 'Id absence', value: 'id'},
          {
            text: 'Matricule',
            align: 'left',
            sortable: true,
            value: 'matricule',
          },

          {text: 'Nom', value: 'nom'},
          { text: 'Date', value: 'date' },
          { text: 'Groupe', value: 'nom_groupe' },
          { text: 'Seance', value: 'nom_seance' },
        ],
        Matricules: [

        ],
      }
    },
    methods: {
     AfficherAbs: function() {
       axios.get('http://localhost:8000/api/AfficherAbs')
       .then(response => {
         this.Matricules = response.data;
       })
       .catch(error => {
         console.log('errors :',error);
       })
     }
    },
    mounted :function()  {
    this.AfficherAbs();
      }


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
