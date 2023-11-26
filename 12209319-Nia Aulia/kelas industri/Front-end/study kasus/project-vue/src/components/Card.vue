<template>
    <div class="card-service">
       <h4>
        {{ title }}
        <p>{{ description }}</p>
       </h4>
       <img class="image1" src="@/assets/img/profil.jpg" alt="">
       <slot></slot>
    </div>
    <img class="img" src="@/assets/img/kucing.jpg" alt="">
    <p class="name">{{ nama }}</p>
    <p class="date">{{ date }}</p>
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
   
   
</template>
 <script>
export default {
    props: ['title', 'description', 'image1', 'nama', 'image2', 'date'] , 
}
</script>

<style scoped>    
    .card-service {
        text-align: start;
        min-height: 287px;
        padding: 30px 30px 0 30px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.08);
        background: white;
        transition: all 0.5s ease;
        margin: 10px 10px;
        margin-left: 389px;
        min-width: 500px;
        margin-top: 100px;
        border-top-right-radius: 15px;

    }

    .card-service h4 {
        font-size: 18px;
        line-height: 30px;
        color: #343b4e;
    }

    .card-service p {
        font-weight: 400;
        color: #B4B4B3;
        margin: 0 0 10px 0;

    }

    .img {
    width: 236px;
    margin-left: -345%;
    height: 316px;
    margin-top: 103px;
    border-top-left-radius: 15px;
   
    }
    img.image1 {
        height: 46px;
        border-radius: 170px;
        margin-top: 5px;
    }
        
    p.date {
        margin-left: 50%;
        margin-top: -78px;
        color: gray;
    }

    p.name {
        margin-left: -1244%;
        margin-top: 550%;
        margin-top: 332px;
    }

    svg {
        margin-left: -86px;
        margin-top: -74px;
    }
</style>