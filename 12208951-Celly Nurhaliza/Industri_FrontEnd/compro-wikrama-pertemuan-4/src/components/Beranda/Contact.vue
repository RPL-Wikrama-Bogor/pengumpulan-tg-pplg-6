<template>
    <div class="blog blog-section">
        <h3>Contact</h3>
        <slot></slot>
        <div class="row-blog">
            
        </div>
    </div>
</template>
<script>
import CardContact from '@/components/Contact/Card.vue';
export default {
    components: {
        CardContact
    },
    props: ['data']
}
</script>