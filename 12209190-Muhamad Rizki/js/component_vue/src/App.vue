<template>
  <div class="row-service">
<card v-for="item in data" :title="item.title" :description="item.description"><p>31 oktober 2023</p> </card>
<p>{{ item.date }}</p>

</div>
<button class="btn-service">detail</button>
<MyBtn id="button 1" name="button"></MyBtn>
<MyBtn id="button 2" name="button"></MyBtn>
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
      data:[
        {
          title:'tittle 1 ',
          description:'description 1 ',
          date: '31 Oktober'


        },
        {
          title:'tittle 2 ',
          description:'description 2 ',
          date: '31 Oktober'
        }
        

      ]
      
    }
  }
}
</script> 
<style>
 .btn-service-global{
    margin-top: 10px;
    font-size: 13px;
    font-weight: 400;
    color: white;
    background-color: blue;
    padding: 15px 30px;
    border: none;
    border-radius: 5px; 
}
.row-service{
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap:10px;

}
</style>