<template>
    <div>
        <v-card class="aff">
        <v-card-title class="text">
             <v-icon
             color="white"
             large
             >
             {{ svgPath }}
            </v-icon>
        Ajouter un étudiant
      <v-spacer></v-spacer>
    </v-card-title>
       <v-form class="ajout"
       dark
       ref="form"
       v-model="valid"
       lazy-validation>
       <v-text-field color="blue"
         v-model="message"
         label="Nom"
         required>  
       </v-text-field>
         <v-text-field color="blue"
         v-model="message"
         label="Prénom"
         required>  
       </v-text-field>
       <v-text-field color="blue"
           v-model="email"
           :rules="emailRules"
           label="E-mail"
           required>
        </v-text-field>
        <v-text-field color="blue"
           v-model.number="matricule"
           type="number"
           :rules="matriRules"
           label="Matricule"
           required>
        </v-text-field>
        <div class="group">
            <v-select
             v-model="select"
             :items="items"
             :rules="[v => !!v || 'Item is required']"
              label="Niveau d'étude"
             required
            ></v-select>
        </div>
       </v-form>
       <v-btn id="au"
        :disabled="!valid"
        color="blue"
        class="mr-4"
        @click="validate"
         >
         Valider
       </v-btn>

        <v-btn id="au"
         color="blue"
         class="mr-4"
         @click="reset"
        >
        Annuler
        </v-btn>
        </v-card>
    </div>
</template>
<script>
import { mdiAccount } from '@mdi/js'
export default {
    data :()=>({
        svgPath: mdiAccount,
      row : null,
      valid: true,
      email: '',
      items: [
        '1CPg1',
        '1CPg2',
        '1CPg3',
        '1CPg4',
        '1CPg5',
        '1CPg6',
        '1CPg7',
        '1CPg8',
        '2CPg1',
        '2CPg2',
        '2CPg3',
        '2CPg4',
        '2CPg5',
        '2CPg6',
        '2CPg7',
        '2CPg8',
        '1CSg1',
        '1CSg2',
        '1CSg3',
        '1CSg4',
        '1CSg5',
        '1CSg6',
        '1CSg7',
        '1CSg8',
        '1CSg9',
      ],
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      matriRules: [
        v => !!v || 'Matricule is required',
        v => v.lenght()>= 6 || 'Matricule is required ',
        v => v - v % 10000 >=19 ||  'Matricule is required ',
      ],

    }),
    methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
      },
      reset () {
         this.$refs.form.resetValidation()
      },
      
    },
  
    
}
</script>
<style scoped>
.group{
    position: relative;
    border : 5px;
    border-color: #0080FF;
}
.ajout{
    position: relative;
    border-radius: 5px;
   margin: 20px 20px 20px 150px;

}
  .aff{
    position: relative;
    fill: #0080FF;
    border-radius: 5px;
    margin: 70px 30px 40px 150px;
    opacity: 0.9;
  }
   .text{
       background-color: #0080FF;
       color: white;
}
#au{
    position: relative;
    margin: 10px 20px 30px 250px;
    padding-right: 10px;
}
 
</style>