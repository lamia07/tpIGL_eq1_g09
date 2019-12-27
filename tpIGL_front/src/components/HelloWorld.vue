<template>
<div>
  <v-form class="auth" v-if="gh==='false'"
    dark
    ref="form"
    v-model="valid"
    lazy-validation
  >
   <v-badge
      color="blue"
      left
      overlap
    >
      <template v-slot:badge>
        <v-icon dark>
          mdi-check
        </v-icon>
      </template>
      <v-icon
        color="grey lighten-1"
        large
      >
        {{ svgPath }}
      </v-icon>
    </v-badge>
   <div class="cs">
     <v-card-text title="Authentification" class="icon">Authentification</v-card-text>
    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>
    <v-text-field
            v-model="password"
            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
            :rules="[rules.required, rules.min]"
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            label="Mot de passe"
            hint=" 8 caractères"
            counter
            @click:append="show1 = !show1"
          ></v-text-field>

    <v-select
      v-model="select"
      :items="items"
      :rules="[v => !!v || 'Item is required']"
      label="Occupation"
      required
    ></v-select>
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
      Vider
    </v-btn>

    <v-btn id="au"
      color="blue"
      class="cs"
      @click="resetValidation"
    >
      Annuler
    </v-btn>
   </div>
    <v-spacer></v-spacer>
  </v-form>
  <div v-if="gh==='ok'">
    <Authent/>
  </div> 
  </div>
</template>
<script>
import Authent from './Authent.vue'
import { mdiAccount } from '@mdi/js'
  export default {
    components : {
       Authent,
    },
    data: () => ({
      gh :"false",
        show1: false,
        password: '',
        rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 8 || 'Minimum 8 caractères',
          emailMatch: () => ('The email and password you entered don\'t match'),
        },
      svgPath: mdiAccount,
      valid: true,
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
      items: [
        'Admin',
        'Enseignant',
        'Etudiant',
      ],
    }),

    methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true,
          this.gh="ok"
        }
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>
<style scoped>
  .auth {
    position: relative;
    height: 20;
    width: 30;
    margin: 250px;
    background-color: aliceblue;
    opacity: 0.8;
    border-radius: 5px;
  }
.cs{
  position: relative;
  margin: 50px 50px 50px 50px;
}
.icon{
  text-align: left;
  font-size: 24px;
  color:#0080FF;
}
</style>