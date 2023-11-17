<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description" :image="item.image" :pfp="item.pfp" :name="item.name" :date="item.date">
    </Card>
  </div>
  <!-- <button class="btn-service">Detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn"></MyBtn> -->
</template>

<script>
  import Card from '@/components/my-components/Card.vue'

  export default{
    components:{
      Card,
      'Card-Services': Card,
    },
    data() {
    return {
      data:[
        {
          title: 'Shift The Overall Look By Adding The Wonderfull Item',
          description: 'Lorem ipsum dolor sit amet, consectetur, sed do, ullamcorper ullamcorper vel aug  commod tempor auctor',
          date: '31 Oktober 2023',
          name: 'Michelle Applleton',
          pfp: 'manca.jpg',
          image: 'manca.jpg'
        },
        {
          // title: 'Diduga lepas dari kandang, sapi mengamuk dijalan',
          // description: 'Lorem ipsum dolor sit amet, consectetur do not et al elementum et al element lorem lorem ipsum',
          // date: '31 Oktober 2023',
          // name: 'Muhammad Riesky Fabiansyah',
          // image: 'manca.jpg'
        }
      ]
    }
  }
  }
</script>

<style>
  .row-service {
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    display: flex;
    width: 50%;
    justify-content: center;
    align-items: center;
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
  .p-name {
    font-weight: bold;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    flex-direction: row;
  }
</style>