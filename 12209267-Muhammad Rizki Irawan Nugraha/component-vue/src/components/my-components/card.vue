<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <p>{{ description }}</p>
        <slot></slot>
        
        <button class="btn-service">click</button>
        <button class="btn-service-global">out</button>

    </div>
</template>
<script>
export default{
    props: ['title', 'description']
}
</script>

<style scoped>
.btn-service{
    margin-top: 10px;
    font-size: 13px;
    color:white;
    background-color: black;
    padding: 15px 30px;
    border:none;
    border-radius: 5px;
}

.card-service{
    text-align: start;
    min-height: 306px;
    padding:30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0,0,0,0);
    border-radius: 60px 0px 0px 0px;
    background: rgba(175,175, 190);
    transition: all 0,5 ease;
    margin: 19px 10px;
}
.card-service h4{
    font-size: 18px;
    line-height:30px;
    color:black;
}
.card-service p{
    font-weight:460;
    color:blue;
    margin: o o 10px 0;
}



</style>