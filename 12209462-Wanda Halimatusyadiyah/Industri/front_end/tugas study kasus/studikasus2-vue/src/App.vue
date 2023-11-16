<template>
  <Card v-for="(item, index) in cardContent" :key="index" :title="item.title" :desc="item.desc" :image="item.image">
  <small>created by: Salma Hayya</small>
  </Card>
</template>
<script>
//panggil file
import Card from '@/components/Card.vue' ;
export default {
  //component apa saja yang akkan ditampilkan
  components: {
    // definisi component agar bisa digunakan di template
    Card,
  },
  data() {
    return {
      cardContent: [
        {
          title: 'KUCING' ,
          desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, iusto esse placeat, repellat voluptatibus eveniet ad commodi totam.' ,
          image: 'uceng.jpg',
        },
        {
          title: 'PANTAI' ,
          desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, iusto esse placeat, repellat voluptatibus eveniet ad commodi totam.' ,
          image: 'pinbeach.jpg'
        },
      ]
    } 
  }
}
</script>
<style></style>
