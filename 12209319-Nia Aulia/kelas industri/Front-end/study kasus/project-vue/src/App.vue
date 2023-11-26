<template>
  <div class="row-service">
    <Card v-for="(item, index) in cardContent" :key="index" :title="item.title" :description="item.description" :image="item.image" :nama="item.nama" :image1="item.image1" :date="item.date">
    </Card>
  </div>
</template>
<script>
import Card from '@/components/Card.vue';
export default {
  components: {
    Card,
  },
  data() {
    return {
      cardContent: [
        {
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninvting. Ive got some simple tips to help you make any room feel complete',
          nama: 'niaa',
          image1: 'kucing.jpg',
          iamge2:'profil.jpg',
          nama: 'Nia Aulia',
          date: '31 Oktober 2023',

        }
      ]
    }
  }
}
</script>

<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
</style>