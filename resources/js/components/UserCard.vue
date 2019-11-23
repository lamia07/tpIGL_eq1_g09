<template>
  <v-card class="card-user">
    <p class="card-text">
    </p>
    <div class="author">
        <img class="avatar" src="./anime6.png" alt="...">
        <h5 class="title">{{user.fullName}}</h5>
      <p class="description">
        {{user.title}}
      </p>
    </div>
    <p></p>
    <p class="card-description">
      {{user.description}}
    </p>
    <div slot="footer" class="button-container">
      <basebutton icon round class="btn-facebook">
        <i class="fab fa-facebook"></i>
      </basebutton>
      <basebutton icon round class="btn-twitter">
        <i class="fab fa-twitter"></i>
      </basebutton>
      <basebutton icon round class="btn-google">
        <i class="fab fa-google-plus"></i>
      </basebutton>
    </div>
  </v-card>
</template>
<script>
//import base-button from './BaseButton.vue';
import basebutton from './BaseButton.vue';
import card from './Card.vue';
  export default {
      colors: {
    default: "#344675",
    primary: "#42b883",
    info: "#1d8cf8",
    danger: "#fd5d93",
    teal: "#00d6b4",
    primaryGradient: ['rgba(76, 211, 150, 0.1)', 'rgba(53, 183, 125, 0)', 'rgba(119,52,169,0)'],
  },
    props: {
      user: {
        type: Object,
        default: () => {
          return {};
        }
      }
    }
  }
  
</script>
<style scoped>
  .avatar {
      width: 124px;
      height: 124px;
      position: relative;
       -webkit-border-radius:50px;
       -moz-border-radius:50px;
       border-radius:50px;
      border: 5px solid #0080FF;
      background-attachment: fixed;
      
    }
     .author {
        text-align: center;
        text-transform: none;
     }
     
  
  .card-user{
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  width: 250;
  margin : 50px 50px 50px  50px ;
  word-wrap: break-word;
  background-color:white;
  opacity: 0.7;
  background-clip: border-box;
  border-radius:5px;
}
</style>