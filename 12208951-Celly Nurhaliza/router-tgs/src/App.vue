<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p class="nama">{{ item.nama }}</p>
      <p class="date">{{ item.date }}</p>
    </Card>
  </div>
</template>
<script>
  import Card from '@/components/my-components/Card.vue';
  export default{
    components: {
      Card,
      'card-service': Card
    },
    data(){
      return {
        data: [
          {
            title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
            description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. I ve got some simple tips to help you make any room feel complete.',
            nama: 'Celly Nurhaliza',
            date: '31 Oktober 2023'
          },

        ]
      }
    }
  }
</script>
<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10px;
}

.row-service .nama{
  margin-left: 350px;
  margin-top: -85px;
}

.row-service .date{
  margin-left: 350px;
  margin-top: -5px;
}

.btn-service-global {
    margin-top: 10px;
    display: block;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #54B435;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>