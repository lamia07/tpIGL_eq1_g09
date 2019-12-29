<template>
    <div class='comment'>
     <div class="text-center">
    <v-badge
      color="purple"
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

    <v-badge
      overlap
      color="orange"
    >
      <template v-slot:badge>
        <v-icon dark>
          {{ svgPath }}
        </v-icon>
      </template>
      <v-icon
        large
        color="grey darken-1"
      >
        {{ svgPath }}
      </v-icon>
    </v-badge>
  </div>
    </div>
</template>
<script>
 import { mdiAccount } from '@mdi/js'

  export default {
    data: () => ({
      svgPath: mdiAccount
    }),
  }

</script>