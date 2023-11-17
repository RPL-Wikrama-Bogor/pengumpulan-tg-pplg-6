<template>
  <div class="card-service">
    <img src="manca.jpg" class="card-img-bg" alt="...">
    <h4>
      {{ title }}
    </h4>
    <p> {{ description }}</p>
    <img src="manca.jpg" class="img-fluid rounded-start" alt="...">
    <slot></slot>
  </div>
</template>

<script>
  export default {
    props: ['title', 'description', 'name', 'date', 'image', 'pfp']
  }
</script>

<style scoped>

  .btn-service {
    margin-top: 10px;
    font-size: 15px;
    font-weight: 400;
    color: white;
    background-color: #4c55c4;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
  }
  .card-service {
    text-align: start;
    display: flex;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    background: white;
    transition: all 0.5s ease;
    margin: 10px -10%;
  }

  .card-service h4 {
    font-size: 20px;
    line-height: 30px;
    color: #343b4e;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card-service p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card-img-bg {
    width: 35%;
    height: 35%;
    border-radius: 0;
    display: inline-block;
  }
</style>