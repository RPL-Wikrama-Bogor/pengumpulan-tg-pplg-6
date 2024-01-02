<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p></Card>
    <!-- <card-service title="bapaklo" description="anak orang"></card-service> -->
  </div>
  <MyBtn></MyBtn>
</template>

<script>
  import Card from '@/components/my-components/Card.vue';
  export default{
    components: {
      Card,
      'card-service': Card
    },
    data(){
      return{
        data: [{
          title: 'title 1',
          description: 'desc 2',
          date: '31 Oktober 2023'
        },
      {
        title: 'title2',
        description: 'desc 2',
        date: '31 Oktober 2023'
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
        background-color: #10e81f;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
  }
</style>