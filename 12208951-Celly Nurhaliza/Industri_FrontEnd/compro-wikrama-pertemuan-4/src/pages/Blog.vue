<template>
    <div class="container">
        <Blog>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul">
            </div>
        </Blog>
    </div>
</template>
<script>
import Blog from '@/components/Beranda/Blog.vue';
export default {
    components: {
        Blog
    },
    data() {
        return {
            DataBlog: []
        }
    },
    async mounted() {
        const response = await Get('Blog');
        this.DataBlog = response.data.data;
    }
}
</script>