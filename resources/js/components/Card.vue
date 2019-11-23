<template>
  <div class="card">
    <div class="card-image" v-if="$slots.image">
      <slot name="image"></slot>
    </div>
    <div class="card-header" v-if="$slots.header || title" :class="headerClasses">
      <slot name="header">
        <h4 class="card-title">{{title}}</h4>
        <p class="card-category" v-if="subTitle">{{subTitle}}</p>
      </slot>
    </div>
    <div class="card-body" v-if="$slots.default">
      <slot></slot>
    </div>
    <div class="card-image" v-if="$slots['image-bottom']">
      <slot name="image-bottom"></slot>
    </div>
    <slot name="raw-content"></slot>
    <div class="card-footer" :class="footerClasses" v-if="$slots.footer">
      <slot name="footer"></slot>
    </div>
  </div>
</template>
<script>
  export default {
    name: "card",
    colors: {
    default: "#344675",
    primary: "#42b883",
    info: "#1d8cf8",
    danger: "#fd5d93",
    teal: "#00d6b4",
    primaryGradient: ['rgba(76, 211, 150, 0.1)', 'rgba(53, 183, 125, 0)', 'rgba(119,52,169,0)'],
  },
    props: {
      title: {
        type: String,
        description: "Card title"
      },
      subTitle: {
        type: String,
        description: "Card subtitle"
      },
      type: {
        type: String,
        description: "Card type (e.g primary/danger etc)"
      },
      headerClasses: {
        type: [String, Object, Array],
        description: "Card header css classes"
      },
      bodyClasses: {
        type: [String, Object, Array],
        description: "Card body css classes"
      },
      footerClasses: {
        type: [String, Object, Array],
        description: "Card footer css classes"
      }
    }
  };
</script>
<style>
.card-user{
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  width: 250;
  margin : 50px 50px 50px  50px ;
  word-wrap: break-word;
  background-color:black;
  opacity: 0.7;
  background-clip: border-box;
  border-radius:5px;
}


</style>
