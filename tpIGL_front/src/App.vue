<template>
  <v-app dark app >
    <div class="appp">

      <div class="container">

        <Authent/>
      </div><!-- /.container -->

    </div>
  </v-app>
</template>

<script>
import Authent from './components/Authent.vue';

export default {
  name: 'App',

  components: {
    Authent,
  },

  data: () => ({
     menu: [
        { icon: 'home', title: 'Link A' },
        { icon: 'info', title: 'Link B' },
        { icon: 'warning', title: 'Link C' }
      ]

  }),
};
</script>
<style scoped>
.appp{
 background-image: url(./img/bureau.jpg);
 background-attachment: fixed;
 opacity: 0.8;
}
 .container{
   margin: 0px 0px 0px 0px;
 }
</style>
