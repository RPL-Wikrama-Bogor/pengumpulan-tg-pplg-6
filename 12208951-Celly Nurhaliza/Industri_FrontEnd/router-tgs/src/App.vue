<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p class="nama">{{ item.nama }}</p>
      <p class="date">{{ item.date }}</p>
    </Card>
    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
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
            date: '31 Oct 2023'
          },

        ]
      }
    }
  }
</script>
<style>
*{
  background-color: #F5F7F8;
}
.row-service {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10px;
}

.row-service .nama{
  margin-left: 350px;
  margin-top: -85px;
  background: white;
}

.row-service .date{
  margin-left: 350px;
  margin-top: -5px;
  background: white;
}
.row-service .icon{
  margin-top: 390px;
  margin-left: -200px;
}
</style>