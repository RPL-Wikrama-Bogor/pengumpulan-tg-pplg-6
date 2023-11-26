<template>
    <div class="container">
        <div class="row-Blog">
            <Card v-for="item in DataBlog" :blog="item"></Card>
        </div>
    </div>
    
</template>

<script>
import { Get } from '../Api';
import Card from '../components/Blog/Card.vue';

export default{
components:{
    Card,
    props:['data']
},
data() {
    return {
        DataBlog: []
    }
},
async created(){
    const response = await Get('http://127.0.0.1:9000/api/blog')
    this.DataBlog = response.data.data
}
}
</script>