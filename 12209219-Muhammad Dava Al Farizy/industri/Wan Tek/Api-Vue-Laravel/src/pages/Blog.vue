<template>
    <div class="container">
        <div class="blog">
            <h3>Portofolio kami</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum animi quidem doloribus veniam cum. Alias excepturi distinctio laborum, iste harum dolorem sapiente, eveniet exercitationem aliquid velit reiciendis, beatae ipsam eum sint illum..</p>
            <!-- <div class="category">
                <span>Web</span>
                <span>Desain</span>
                <span>Mobile</span> -->
            </div>
            <div class="row-blog">
            <!-- <Card v-for="item in DataPortfolio" :portfolio="item"></Card> -->
            </div>
        </div>
    <!-- </div> -->
</template>
<script>
import Card from '@/components/blog/Card.vue';
import{ Get } from '@/api/index.js';
export default{
    components:{
        Card
    },
    data() {
        return {
            DataBlog: []
        }
    },
    async created() {

        const response = await Get ('http://127.0.0.1:9000/api/blog');
        console.log(response);
        this.DataBlog = response.data.data ;
        console.log(this.DataBlog);
    },
}
</script>