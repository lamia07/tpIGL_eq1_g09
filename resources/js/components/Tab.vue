<template>
<div>
<v-card class="card" color="blue"
  >
    <v-card-title class="text">
      Liste des Etudiants absents
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
      :items="Absences"
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
            text: 'Id_absence',
            align: 'left',
            sortable: true,
            value: 'id_absence',
          },
          {text: 'name', value: 'name'},
          { text: 'Groupe', value: 'groupe' },
          { text: 'Date', value: 'date' },
          { text: 'Module', value: 'module' },

        ],
        Absences: [

        ],
      }
    },
    created() {
            this.axios
                .get('http://localhost:8000/api/absences')
                .then(response => {
                    this.absences = response.data;
                });
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
