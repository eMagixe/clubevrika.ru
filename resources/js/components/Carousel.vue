<template>
  <v-carousel :height="height">
    <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
    ></v-carousel-item>
  </v-carousel>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            src: 'https://pp.userapi.com/c851016/v851016340/73707/z1YD7TCqqe4.jpg'
          },
          {
            src: 'https://pp.userapi.com/c851016/v851016340/7373b/zOieFtHM5vc.jpg'
          },
          {
            src: 'https://pp.userapi.com/c851016/v851016340/73734/Xi1BX1J6fEc.jpg'
          },
          {
            src: 'https://pp.userapi.com/c851016/v851016340/73749/070FfbghSNY.jpg'
          }
        ],
        height: "700"
      }
    },
    mounted () {
        this.height = window.innerHeight - 64;
    }
}
</script>
