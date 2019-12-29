<template>
  <v-app dark app >
    <div class="appp">

      <div class="container">

        <HelloWorld/>
      </div><!-- /.container -->

    </div>
  </v-app>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';

export default {
  name: 'App',

  components: {
    HelloWorld,
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
