<<<<<<< HEAD
<template>
    <div class="container">
         <Blog :data="DataBlog">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul">
            </div>
        </Blog>
    </div>
</template>
<script>
import { Get } from '@/Api/index.js';
import Blog from '@/components/Beranda/Blog.vue';
export default {
    components: {
        Blog
    },
    data(){
        return{
            DataBlog: []
        }
    },
    async mounted() {
        const response = await Get('blog');
        this.DataBlog = response.data.data;
    }
}
=======
<template>
    <div class="container">
         <Blog :data="DataBlog">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul">
            </div>
        </Blog>
    </div>
</template>
<script>
import { Get } from '@/Api/index.js';
import Blog from '@/components/Beranda/Blog.vue';
export default {
    components: {
        Blog
    },
    data(){
        return{
            DataBlog: []
        }
    },
    async mounted() {
        const response = await Get('blog');
        this.DataBlog = response.data.data;
    }
}
>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
</script>