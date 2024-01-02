<template>
    <div class="blog blog-section">
        <h3> Blog</h3>
        <slot></slot>
        <input type="text" placeholder="Cari Judul" style="margin-left: 30px;">
        <div class="row-blog">
            <CardBlog v-for="item in DataBlog" :blog="item"></CardBlog>
        </div>
    </div>
</template>

<script>
import {Get} from '@/Api/index.js'
import '@/assets/blog.css'
import CardBlog from '@/components/Blog/Card.vue';
export default {
    components: {
        CardBlog
    },

    data(){
        return {
            DataBlog: []
        }
    },

    async mounted() {
        const response = await Get('http://127.0.0.1:9000/api/blog')
        // console.log(response.data.data)
        // console.log(response.status)
        this.DataBlog = response.data.data
        console.log(this.DataBlog);
    }
}
</script>