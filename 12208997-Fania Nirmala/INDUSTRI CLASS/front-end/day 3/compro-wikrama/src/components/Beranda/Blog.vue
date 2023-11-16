<template>
    <div class="blog blog-section">
        <h3>Blog</h3>

        <div class="row-blog">
            <CardBlog></CardBlog>
        </div>
    </div>
</template>

<script>
import '@/assets/blog.css';
import CardBlog from '@/components/Blog/CardBlog.vue';
export default {
    components: {
        CardBlog
    }
}
</script>
