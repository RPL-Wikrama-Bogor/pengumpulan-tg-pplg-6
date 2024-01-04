<template>
    <div class="container">
        <div class="portfolio">
            <h4>Portfolio kami</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, laudantium?</p>
            <div class="category">
                <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
                <span @click="all">All</span>
            </div>

            <div class="row-portfolio">
                <Card v-for="item in DataPortfolio" :portfolio="item"></Card> 
            </div>
        </div>
    </div>
</template>

<script>
import {Get} from "@/Api/index.js"
import Card from "@/components/Portfolio/Card.vue"

export default{

    components: {
        Card
    },
    
    data(){
        return {
            DataPortfolio: [],
            DataCategories: []
        }
    },
    
    methods: {
        async filter(id){
            // alert(id)
            const response = await
             Get('http://127.0.0.1:9000/api/portfolio?category_id='+id)
            this.DataPortfolio = response.data.data
        },

        async all(){
            const { data } = await Get('http://127.0.0.1:9000/api/portfolio')
            this.DataPortfolio = data.data
        }
    },

    

    async mounted() {
        const response = await Get('http://127.0.0.1:9000/api/portfolio')
        // console.log(response.data.data)
        // console.log(response.status)
        this.DataPortfolio = response.data.data
        console.log(this.DataPortfolio);

        // 

        const responseCategory = await Get('http://127.0.0.1:9000/api/categories')
        console.log(responseCategory.data);
        this.DataCategories = responseCategory.data
    }
}
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

.row-portfolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

.portfolio h4{
    font-family: 'Raleway', sans-serif;
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
    text-align: center;
}

.portfolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4f556a;
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

    .portfolio h4{
        font-size: 20px;
    }
}
</style>