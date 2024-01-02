<template>
  <div class="row-service">
  <Card v-for="item in data" :img1="item.img1" :img2="item.img2" :deskripsi="item.deskripsi" :title="item.title" :name="item.name" :date="item.date">
  </Card>
  </div>
</template>

<script>
import image from "./assets/img2.jpeg"
import image2 from "./assets/img3.jpeg"
import Card from '@/components/my-components/card.vue';
export default{
  components:{
     Card,
     'card-word' : Card
  },
  data(){
     return{
        data:[
           {
           img1: image,
           img2: image2,
           title:'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
           deskripsi:'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and univting. I ve got some simple tips to help you make any room feel complete.',
           name:"M Khairul Ikhwan",
           date:"31 Desember 2023"


           }
        ]
     }
  }
}
</script>
<style>
.row-service{
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10x;
}
</style>