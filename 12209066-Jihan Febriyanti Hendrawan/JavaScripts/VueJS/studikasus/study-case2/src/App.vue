<template>

<Card v-for="(item, index) in cardContents" :key="index" :nama="item.nama" :judul="item.title" :text="item.text" :image="item.image" :imageNav="item.imageNav"> 
  <small>21 February 2023</small>
</Card>

</template>

<script>

import Card from "@/components/Card.vue";
export default {
  components: {
    Card,
  },
  data(){
    return{
      cardContents: [
        {
          nama  : 'Jihan Febriyanti Hendrawan',
          title : `<p>Shift the overall look and feel by adding these wonderful touches to furniture in your home</p>`,
          text  : `<p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, neque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, neque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, neque?
                  <p>`,
          image : 'kucing.jpg',
          imageNav : 'izil.jpg',
        },
      ],
    };
  },
};

</script>

