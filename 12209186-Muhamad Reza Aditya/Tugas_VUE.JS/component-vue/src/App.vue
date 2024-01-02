

<template>
  <div class="row-service">
    <Card  v-for="item in data" :title="item.title" :description="item.description"></Card>
    <!-- <card-service title="title 2"></card-service> -->
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn></MyBtn>
</template>

<script>
import Card from '@/components/my_components/card.vue'

export default{
  components: {
    Card,
    'card-service' : Card,
  },
  data() {
    return {
      data: [
        {
          title: 'title 1',
          description: 'description'
        },
        {
          title: 'title 1',
          description: 'description'
        },
      ]
    }
  }
}
</script>
<style>
  .row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
  }
  .btn-service-global{
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: white;
        background-color: #20b82a;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
  }
</style>