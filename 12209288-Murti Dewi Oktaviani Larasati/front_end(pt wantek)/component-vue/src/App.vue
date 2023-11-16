<template>
  <div class="row-service">
  <Card v-for="item in data" :title="item.title"  :description="item.description">
    <p>{{ item.date }}</p>
  </Card>
  

</div>
</template>
<script>
import Card from '@/components/my.components/Card.vue';
export default {
  components: {
    Card,
    'card-service': Card
  },
  data() {
    return {
      data: [
        {
        title: 'title 1',
        description: 'description 2',
        date: '31 Oktober 2023'
    },{
        title: 'title 1',
        description: 'description 2'
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
  display: block;
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color:rgb(124, 226, 124) ;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>