<template>
    <div class="container">
        <div class="portofolio">
            <h3>Portofolio kami</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum animi quidem doloribus veniam cum. Alias excepturi distinctio laborum, iste harum dolorem sapiente, eveniet exercitationem aliquid velit reiciendis, beatae ipsam eum sint illum..</p>
            <div class="category">
                <span>Web</span>
                <span>Desain</span>
                <span>Mobile</span>
            </div>
            <div class="row-portofolio">
            <Card v-for="item in DataPortfolio" :portfolio="item"></Card>
            </div>
        </div>
    </div>
    </template>
<script>
    import Card from '@/components/portfolio/Card.vue';
    import{ Get } from '@/api/index.js';
    export default{
        components:{
            Card
        },
        data() {
            return {
                DataPortfolio: []
            }
        },
        beforeCreate(){
            
        },
        async created() {
            const response = await Get ('http://127.0.0.1:9000/api/portfolio');
            console.log(response);
            this.DataPortfolio = response.data.data ;
            console.log(this.DataPortfolio,'port');
        },
    }
</script>
    <style>
    .category{
        margin: 10px 0px 35px 0;
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
    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }
    .portofolio{
        margin-top: 10px;
    }
    .portofolio h3{
        margin-top: 10px;
        font-weight: 900;
        font-size: 40px;
        line-height: 15px;
        margin-bottom: 0;
        color: #042181;
    }
    .portofolio p {
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: #4f556a;
        max-width: 680px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .portofolio span{
        color: gray;
    }
    @media screeen and(max-width: 680px){
    
        .row-portofolio{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 10px;
        }
        .portofolio h3{
            font-size:  20px;
        }
    }
    
    </style>    