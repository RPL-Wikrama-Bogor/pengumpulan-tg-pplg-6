<template>
    <div class="position-absolute start-50 top-50 translate-middle card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img :src="'/src/assets/img/'+ img" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{title}}</h5>
                <p class="card-text">{{description}}</p>
                <div class="rpm float-start">
                    <img class="rounded-circle img-fluid img" src="@/assets/img/ireng.jpeg" alt="muka">
                    <p class="card-text nama"><small>{{ user }}</small></p>
                    <p class="card-text tgl"><small>{{ tanggal }}</small></p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </template> 
      
      <script>
      export default {  
          props: ['title', 'description', 'img','user', 'tanggal', 'muka'],
      }
      </script>
        
    <style scoped>
        .rpm{
            width: 120px;
        }
        .nama{
            margin: -43px 0 0 3rem;
            width: 7rem;
        }
        .tgl{
            margin: 0 0 0 3rem;
        }
        .card {
            width: 600px;
            height: auto;
            border-radius: 7px;
            display: flex;
            margin-top: 20px;
            background-color: whitesmoke;
        }
        .img {
            width: 35%;
            height: auto;
            position: relative;
        }
        .img img {
            width: 100%;
            height: 100%;
        }
        img{
            border-radius: 5px;
        }
        p{
            font-size: 13px;
        }
    </style>

    