<template>
    <div class="card-service">
        <h4>
            {{ title }}
            <p>{{ description }}</p>
            <img class="img-cel" src="@/components/img/celly.jpg" alt="">
        </h4>
        <slot></slot>
    </div>
    <img class="img-foto" src="@/components/img/tg.jpeg" alt="">
</template>
<script>
export default {
    props: ['title', 'description','nama','date']
}
</script>
<style scoped>
.img-foto{
    border-radius: 20px 0px 0px 20px;
    width: 270px;
    height: 335px;
    margin-top: 130px;
    margin-left: -900px;
}
.card-service .img-cel{
    border-radius: 50%;
    width: 60px;
    margin-top: 1em;
}
.card-service {
    text-align: start;
    min-height: 306px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.05);
    border-radius: 20px 20px 20px 20px;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
    margin-left: 300px;
    min-width: 800px;
    margin-top: 130px;
    font-family: sans-serif;
}
.card-service h4 {
    margin-left: 250px;
    font-size: 18px;
    line-height: 30px;
    color: #343b4e;
    background: white;
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
    background: white;
}
</style>