<template>
  <Card v-for="(item, index) in cardContents" :key="index" :judul="item.title" :text1="item.text1" :text2="item.text2" :image="item.image" :profil="item.profil" :tanggal="item.tanggal" :nama="item.nama">
  </Card>
</template>
<script>
//panggil file
//component apa sj yg akn d tampilkan
import Card from '@/components/my-components/Card.vue';
export default {
  components: {
    //definisi component agr bs d gunakan d template
    Card,
  },
  data() {
    return {
      cardContents: [
        {
          title: 'Shift the overall look and feel by  adding these wonderful touches to furniture in your home',
          image: 'awit.jpg',
          profil : 'awit2.jpg',
          nama: 'Awittia Ananda',
          tanggal: '28 Juni 2020',
          text1: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting.', 
          text2: 'I ve got somesimple tips to help you make any room deel complete',
        }
      ]
    }
  }
}
</script>

<style>

</style>