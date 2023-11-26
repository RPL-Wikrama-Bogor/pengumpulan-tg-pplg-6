<template>
  <div class="row-service">
    <card title="ini title" description="ini desc" ></card>
    <card-service title="ini title 2" description="kedua"></card-service>
    <MyBtn></MyBtn>
  </div>
</template>
<script>
import card from '@/components/my components/card.vue' ;
export default {
  components:{
    card,
    'card-service' : card
  }
  
}
</script>

<style>
.row-service{
display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap:10px;
}

.btn-service-global{
    margin-top: 10px;
    font-size: 15px;
    font-weight: 400;
    color: white;
    background-color: #1adb4a;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>