<template>
    <div class="card-service">
        <slot></slot>
        <h1>{{ title }}</h1>
        <p>{{ description }}</p>
        <button class="btn-service">Detail</button>
        <myBtn></myBtn>  
    </div>

    

</template>

<script>
export default {
    props: ['title', 'description']
}
</script>

<style>
.btn-service {
    display: flex;
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: royalblue;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

.card-service {
    display: flex;
    flex-direction: column;
    background-color: #f2f2f2;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-service h1 {
    font-size: 24px;
    margin: 0;
}

.card-service p {
    font-size: 16px;
}
</style>

