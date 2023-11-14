<template>
<div class="row-service">
  <Card v-for="item in data" :title="item.title" :description="item.description">
  <p>{{ item.date }}</p></Card>
  <!-- <card-service title="Card 2" description="Ini adalah card 2"></card-service>
  <card-service title="Card 2" description="Ini adalah card 2"></card-service>
  <card-service title="Card 2" description="Ini adalah card 2"></card-service> -->
</div>
<button class="btn-service">Detail</button>
<MyBtn id="btn1" name="btn"></MyBtn>
<MyBtn id="btn2" name="btn"></MyBtn>
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
        title: 'Hello world !',
        description: 'Ini adalah card 1',
        date: '31 oktober 2023'
      },
      {
        title: 'Hello world !',
        description: 'ini adalah card 2',
        date: '1 november 2023'
      },
      {
        title: 'Hello world !',
        description: 'ini adalah card 3',
        date: '2 november 2023'
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

.btn-service-global {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: green; 
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>