<template>
    <div class="container">
        <div class="portofolio">
            <h3>Portfolio Kami</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, corrupti!</p>
            <div class="category">
                <span>web</span>
                <span>desain</span>
                <span>mobile</span>
            </div>
            <div class="row-portofolio">
               <Card v-for="item in DataPortfolio" :portofolio="item"></Card>
            </div>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portfolio/Card.vue'
import { Get } from "@/api/index.js";
export default {
    components: {
        Card,
    },
    data() {
        return {
            DataPortfolio: []
        }
    },
    async created() {   
        const response = await Get('http://localhost:9000/api/portfolio');
        this.DataPortfolio = response.data.data;   
    },
 }
</script>
<style scoped>
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
    transition: all 0.4s ease;
}
.row-portofolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}
.portofolio{
    margin-top: 10px;
}
.portofolio h4{
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
}
.portofolio p{
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4f556a;
    max-width: 600px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;
}
.portofolio p span{
    color: gray;
}
@media screen and(max-width: 600px) {
    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
    .portofolio h4{
        font-size: 20px;
    }
}

</style>