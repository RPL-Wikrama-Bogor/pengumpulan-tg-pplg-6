<template>
    <div>
      <div class="topnav container" :class="{responsive: navbarActive}">
        <div class="logo">
          <div><img src="@/assets/img/logo.png" alt="logo"></div>
          <a class="icon">
            <img src="@/assets/img/hamburger.svg" @click="navbar" alt="hamburger">
          </a>
        </div>
        <div class="menu">
          <!-- <a href="">Home</a>
          <a href="">Portfolio</a>
          <a href="">Blog</a>
          <a href="">Contact</a> -->
          <router-link to="/" class="router-link">Home</router-link>
          <router-link to="/portfolio" class="router-link">Portfolio</router-link>
          <router-link to="/service" class="router-link">Service</router-link>
          <router-link to="/blog" class="router-link">Blog</router-link>
        </div>
      </div>
    </div>
  <router-view></router-view>
</template>

<script>
  export default{
    data(){
      return {
        navbarActive: false
      }
    },
    methods:{
      navbar(){
        if(this.navbarActive){
          this.navbarActive = false;
          
        } else {
          this.navbarActive = true;

        }
      }
    }
  }
</script>

<style scoped>
.topnav {
  overflow: hidden;
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.router-link {
  float: left;
  color: black;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
  font-size: 17px;
}

.router-link:hover {
  border-bottom: 2px solid #4c55cd;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  border-bottom: 2px solid #4c55cd;
}

.topnav a:hover {
  color: black;
}

.topnav a:active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.logo {
  display: flex;
  justify-content: space-between;
  max-width: 100%;
  padding: 10px;
}

@media screen and (max-width: 600px) {
  .topnav {
    display: block;
    padding: 0;
  }

  .topnav .menu a {
    display: none;
  }

  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {
    position: relative;
    display: block;
  }

  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>