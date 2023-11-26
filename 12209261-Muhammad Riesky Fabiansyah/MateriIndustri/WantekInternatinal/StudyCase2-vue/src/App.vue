<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn"></MyBtn>
</template>

<script>
import Card from '@/components/my-components/Card.vue'
export default {
  components: {
    Card,
    'Card-Services': Card
  },
  data() {
    return {
      data: [
        {
          title: 'Ini Title 1',
          description: 'Ini Description 1',
          date: '31 Oktober'
        },
        {
          title: 'Ini Title 2',
          description: 'Ini Description 2',
          date: '31 Oktober'
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
  font-size: 15px;
  font-weight: 400;
  color: white;
  background-color: #79AC78;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>