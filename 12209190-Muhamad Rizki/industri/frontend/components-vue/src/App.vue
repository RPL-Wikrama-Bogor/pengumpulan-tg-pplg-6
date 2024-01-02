<template>
  <div class="row-service">
  <card v-for="item in data " :title="item.title" :description="item.description">
    <p>{{ item.date }}</p>
  </card>
  </div>
  <button class="btn-service">detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn2"></MyBtn>
</template>
<script>
  import card from '@/components/my-components/card.vue'
  export default{
    components:{
      card,
      'card-service': card
    },
    data(){
      return{
        data: [   
          {
            title: 'title 1',
            description: 'description 2 ',
            date: '31-10-2023'
          },{
            title: 'title 1',
            description: 'description 2',
            date: '31-10-2023'
          }
        ]
      }
    }
  }
</script>
<style>
 .btn-service-global{
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: white;
        background-color: rgb(0, 128, 53);
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
 }
  .row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
  }
</style>