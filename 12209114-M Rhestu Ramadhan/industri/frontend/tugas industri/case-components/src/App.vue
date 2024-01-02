<template>
  <Card v-for="(item, index) in cardContents" :key="index" :title="item.title" :description="item.description" :img="item.img" :muka="item.muka" :user="item.user" :tanggal="item.tanggal">
  </Card>
</template>


<script>
import Card from "@/components/Card.vue";
export default {
  components: {
    Card,
  },
  data() {
    return {
      cardContents: [
        {
          title: "M Rhestu Ramadhan",
          description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, enim! Fugiat debitis blanditiis architecto, et enim eius quaerat placeat corporis?',
          img: 'ireng.jpeg',
          muka: 'ireng.jpeg',
          user: 'Restu', 
          tanggal: '22-09-2023',
        }
      ]
    }
  }
}
</script>