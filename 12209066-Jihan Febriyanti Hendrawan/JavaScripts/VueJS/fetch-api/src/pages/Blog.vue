<template>
    <div class="container">
        <Blog :data="DataBlog">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul"  @keyup="handleSearch">
            </div>
        </Blog>
    </div>
</template>

<script>
    import { Get } from '@/Api/index.js';
    import Blog from '@/components/Beranda/Blog.vue';
    export default{
        components:{
            Blog
        },
        data(){
            return{
                DataBlog: []
            }
        },
        async created(){
            const response = await Get('http://127.0.0.1:9000/api/blog');
            this.DataBlog = response.data.data;
        }
    }
</script>

<style>

.search{
    padding-bottom: 90px;
}

.searchTerm {
    width: 300px; 
    height: 30px; 
    border: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    padding: 5px;
}

</style>