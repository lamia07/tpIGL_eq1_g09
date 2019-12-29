<template>
<div class="affich">
  <div class="toolbar" >
  <v-toolbar color="blue" class="toolbar1">
     <v-app-bar-nav-icon color="white"></v-app-bar-nav-icon>
          <v-toolbar-title class="text">GeSco</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-btn icon href="#one" 
          @click="method">
            <v-icon color="white">mdi-format-list-bulleted-square</v-icon>
          </v-btn>
          
          <v-btn icon href="#two" @click="method2">
            <v-icon color="white">mdi-account</v-icon>
          </v-btn>
          <v-btn icon href="#three">
            <v-icon color="white" title="Déconnexion" >mdi-dots-vertical</v-icon>
          </v-btn>
  </v-toolbar>
  </div>
  <v-card class="acc">
    <template v-if="fs==='false'&fc==='false'">
    <v-img src="https://picsum.photos/id/1068/7117/4090"
      aspect-ratio="1"
      class="grey lighten-2"
      />
    </template>
  </v-card>
  <v-spacer></v-spacer>
  <div id="tabs" v-if="fs==='ok'">
  <tab/>
  </div>
  <div id="ajout" v-if="fc==='ok'">
  <ajout/>
  </div>
  
</div>
</template>
<script>
import tab from "./Tab.vue"
import ajout from "./Ajout.vue"
  export default {
  
    components :{
      tab,
      ajout,
    },
    data: () => ({
        fs : 'false',
        fc : 'false',
        search: '',
        bars: [
        { class: '' },
        { class: '' },
        { class: 'primary' },
        { class: 'elevation-0' },
      ],
     
    }),

    methods: {
       method(){
         if(this.fs=='false')
         { this.fc = "false",
           this.fs = "ok"}
         else
         {this.fs = "false"}
       },
       method2(){
         if(this.fc=='false') {this.fs = "false",
           this.fc = "ok"}
         else
         {this.fc = "false"}
       }
    } 
  } 
</script>
<style scoped>
.text{
  color: white;
}
.toolbar1{
  border-radius: 5px;
}
.toolbar{
  border-radius: 10px;
  right: 0px;
  left: 60px;
  top: 30px;

  position: relative;
  margin: 0px 0px 0px 0px;
  opacity: 0.8;
}
.acc{
  position: relative;
  margin: 70px 30px 40px 150px;
  height: 500;
  opacity: 0.9;
}
</style>

