<template>
<div class="row-service">
  <Card v-for="item in data"
  :title="item.title"  
  :img="item.img"
  :imgPfp="item.imgPfp"
  :description="item.description">
  <h4 class="profile">{{ item.nama }}</h4>
  <p class="profile">{{ item.date }}</p>
</Card>
</div>
</template>
<script>
import Card from '@/components/my-components/Card.vue';
export default {
  components: {
    Card,
    'card-service': Card
  },
  data() {
    return {
      data: [
      {
        title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
        description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. I`ve got some simple tips to help you make any room feel complete',
        nama: 'Alya Nursyifa',
        date: '31 Oktober 2023',
        img: 'cat.jpg',
        imgPfp: 'profile.png',
      },
    ]
    }
  }
}
</script>

<style scoped>
/* .row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
} */
* {
  background-color: aliceblue;
}

.profile{
  font-family: 'Arial', sans-serif;
  background-color: #FFFBF5;
}

.profile p{
  margin-top: -15px;
}
</style>