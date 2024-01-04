<template>
    <div class="centered-card">
        <div class="card-service">
            <div class="card-content">
                <img :src="img" height="350" width="350" class="card-image">
                <!-- <img src="@/assets/img/cat.jpg" height="350" width="350" alt="service" class="card-image"> -->
                <div class="card-text">
                    <h2>{{ title }}</h2>
                    <p>{{ description }}</p>
                    <div class="profile">
                        <img :src="imgPfp" height="60" width="60" class="card-image">
                        <!-- <img src="@/assets/img/profile.png" height="60" width="60" alt="service" class="card-image"> -->
                        <div class="profile-text">
                            <slot></slot>
                        </div>
                    </div>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(52, 59, 78, 1);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"
                        class="icon">
                        <path
                            d="M11 6.914V2.586L6.293 7.293l-3.774 3.774 3.841 3.201L11 18.135V13.9c8.146-.614 11 4.1 11 4.1 0-2.937-.242-5.985-2.551-8.293C16.765 7.022 12.878 6.832 11 6.914z">
                        </path>
                    </svg> -->
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    props: ['title', 'description', 'nama', 'date', 'img', 'imgPfp']
}
</script>

<style scoped>
.card-service h2,
.card-service p,
.profile h4,
.profile p {
    font-family: 'Arial', sans-serif;
}

.centered-card {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card-service {
    text-align: start;
    min-height: 306px;
    padding: 0px 10px 0px 1px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 10px;
    background: #FFFBF5;
    transition: all 0.5s ease;
    margin: 10px 290px;
}

.card-content {
    display: flex;
    align-items: center;
}

.card-image {
    border-radius: 10px;
    margin-right: 20px;
}

.card-text {
    padding: 18px;
    flex: 1;
}

.card-service h2 {
    line-height: 30px;
    color: #343b4e;
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
}

/* .profile h4{
    display: flex;
    justify-content: center;
    align-items: center;
}
.profile p {
    margin-top: -15px;
    display: flex;
    justify-content: center;
    align-items: center;
} */
/* .profile {
    margin-top: 25px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
}

.profile-text,
.profile-text p {
    text-align: center;
    margin: -15px;
}

.icon {
    padding-right: 80%;
    justify-content: center;
    align-content: center;
    position: relative;
} */
.profile {
    display: flex;
    align-items: center;
}

.profile-text {
    flex: 1;
}

</style>
  