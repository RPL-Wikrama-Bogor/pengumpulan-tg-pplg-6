<template>
    <div class="container">
        <div class="portfolio">
            <h3>Portfolio Kami</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus deleniti itaque odio non quam voluptates, sequi quidem tempore in optio inventore laudantium rerum obcaecati facilis eaque quos voluptatem fugit!</p>
            {{  DataCategories }}
            <div class="category">
                <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
                <!-- <span>Desain</span>
                <span>Mobile</span> -->
            </div>
            <div class="row-portofolio">
                <Card v-for="item in DataPortfolio" :portfolio="item"></Card>
            </div>
        </div>
    </div>
    </template>
    <script>
    import Card from "@/components/Portfolio/Card.vue";
    import { Get } from '@/Api/index.js';
    export default {
        components: {
            Card,
            // props: ['data']
        },
        methods:{
            async filter(id){
            const response = await
            Get('portfolio?category_id='+ id);
            this.DataPortfolio = response.data.data;
            }
        },
        data(){
            return {
                DataPortfolio: [],
                DataCategories: []
            }
        },
        async created(){
            const response = await
            Get('portfolio');
            this.DataPortfolio = response.data.data;
    
            const responseCategories = await
            Get('categories');
            this.DataCategories = (response.data.data);
            this.DataCategories = responseCategories.data;  
        },
    };
</script>
<style>
.category{
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
}

.category span{
    background-color: #bdcdff;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
}

.row-portfolio{
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
}

.portfolio{
    margin-top: 10px;
}

.portfolio h3{
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
}
.portfolio p{
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: #4F556A;
        max-width: 680px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
        text-align: center;
    }
    .portfolio p span{
        color: gray;
    }

@media screen and (max-width: 600px) {

    .row-portfolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }

    .portfolio h3 {
        font-size: 20px;
    }
}
</style>
