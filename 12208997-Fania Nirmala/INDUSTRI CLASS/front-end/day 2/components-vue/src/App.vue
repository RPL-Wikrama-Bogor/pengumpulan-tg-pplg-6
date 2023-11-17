<template>
  <Card v-for="(item, index) in cardContents" :key="index" :judul="item.title" :text1="item.text1" :image="item.image" :profil="item.profil" :tanggal="item.tanggal" :nama="item.nama">
  </Card>
</template>
<script>
  import Card from '@/components/Card.vue';
  export default {
    components: {
      Card,
    },
    data() {
      return {
        cardContents: [
          {
            title: 'Shift the overall look and feel by  adding these wonderful touches to furniture in your home',
            image: 'ciell.jpg',
            profil : 'ruby.jpg',
            nama: 'machuu',
            tanggal: '25 March 2007',
            text1: "Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. I've got somesimple tips to help you make any room deel complete.", 

          },
        ]
      }
    }
  }
</script>