<template>
  <div class="row-service">
  <Card v-for="item in data" :title="item.title" :description="item.description">
  <p>{{ item.date }}</p>
</Card>
</div>
<button class="btn-service">Details</button>
<MyBtn id="btn1" name="btn"></MyBtn>
<MyBtn id="btn2" name="btn"></MyBtn>
</template>

<script>
import Card from '@/components/my components/Card.vue'

export default{
  components: {
    Card,
    'card-service': Card
  },
  data(){
    return{
      data:[
      {
        title: 'Gojo Journey',
        description: 'saikyou',
        date: Date('Y-m-d H:i:s')
      },{
        title: 'hiken no ace',
        description: 'grace de ace',
        date: '1 November'
      
        }
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
    background-color: #4cc476;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>