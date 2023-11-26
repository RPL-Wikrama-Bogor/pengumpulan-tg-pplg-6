<template>
  <div class="row-service">
    <Card v-for="dataItem in data" :title="dataItem.title" :description="dataItem.description"> <p>{{ dataItem.date }}</p> </Card>
  </div>

  <myBtn id="btn1" name="btn"></myBtn>
    <myBtn id="btn2" name="btn"></myBtn>
</template>

<!-- diatas sintaks untuk template yang akan ditampilkan -->


<!-- script -->

<script>

  import Card from './components/myComponent/Card.vue'

  export default {
    components: {
      Card,
    },

    data(){
      return {
        data: [
          {
          title: 'dipeluk alien',
          description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque autem fugiat ea facilis.',
          date: '31 oktober 2023',
        },
        {
          title: 'bajigur terbang',
          date: '1 oktober 2023',
          description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni incidunt veritatis numquam.',
        },
        {
          title: 'nongkrong ditabrak sapi',
          description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit veritatis beatae perferendis.',
          date: '35 oktober 2023',
        },
      ]
      }
    }
  }
</script>

<!-- akhir script -->



<!-- untuk style -->

<style lang="css" >

.btn-service-global{
  margin-left: 5px;
  margin-top: 10px;
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color: green;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}

.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
</style>