<template>
    <div class="container">
      <div class="portfolio">
        <h3>Portofolio Kami</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque inventore sint ex</p>
        {{  DataCategories }}
        <div class="category">
          <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
        </div>
        <div class="row-portfolio">
          <Card v-for="item in DataPortfolio" :portfolio="item"></Card>
        </div>
      </div>  
    </div>
  </template>
  
  <script> 
    import Card from "@/components/Portfolio/Card.vue";
    import { Get } from '@/Api/index.js';
    export default{
      components: {
        Card
      },
      methods:{
         async filter(id){
            const response = await
            Get('http://127.0.0.1:9000/api/portfolio?category_id=' + id);
            this.DataPortfolio = response.data.data;
        }
      },
  
      data(){
        return {
          DataPortfolio: [],
          DataCategories:[]
        }
      },
      async created() {
        const response = await Get('http://127.0.0.1:9000/api/portfolio');
        this.DataPortfolio = response.data.data;

        const responseCategories = await Get('http://127.0.0.1:9000/api/categories');
        console.log(responseCategories.data);
        this.DataCategories = responseCategories.data;

        // console.log(response);
        // console.log(response.status);
        // console.log(this.DataPortfolio);
      }
    }
  </script>
  
  <style>
    .category {
      margin: 10px 0 35px 0;
      display: flex;
      flex-wrap: wrap;
    }
  
    .category span {
      background-color: #bdcdff;
      padding: 10px 15px;
      font-weight: 500;
      border-radius: 20px;
      margin: 5px;
      cursor: pointer;
    }
  
    .row-portfolio {
      display: flex;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
    }
  
    .portfolio {
      margin-top: 10px;
    }
  
    .portfolio h3 {
      margin-top: 10px;
      font-weight: 900;
      font-size: 30px;
      line-height: 35px;
      margin-bottom: 0;
      color: #042181;
      font-family: 'Railway', sans-serif;
      text-align: center;
    }
  
    .portfolio p {
      font-weight: 900;
      font-size: 14px;
      line-height: 20px;
      color: #4f556A;
      max-width: 680px;
      margin: auto;
      margin-top: 14px;
      margin-bottom: 25px;
      text-align: center;
    }
  
    .portfolio p-span {
      color: gray;
    }
  
    @media screen and (max-width: 600px) {
      .row-portfolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
      }
  
      .portfolio h4 {
        font-size: 20px;
      }
    }
  </style>