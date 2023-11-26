<template>
  <div>
<div class="topnav container" :class="{ responsive: navbarActive }">
  <div class="logo">
    <div><img src="@/assets/img/logo.png" alt="logo"></div>
    <a class="icon">
      <img src="@/assets/img/hamburger.svg" @click="navbar" alt="hamburger">
    </a>
  </div>
  <div class="menu">
    <router-link to="/">Home</router-link>
    <router-link to="/portofolio" >Portofolio</router-link>
    <router-link to="/blog" >Blog</router-link>
    <router-link to="/service" >Service</router-link>
  </div>
</div>
</div>
</template>
<script>
export default {
data(){
    return {
        navbarActive: false
    }
},
methods: {
    navbar(){
        if(this.navbarActive){
            this.navbarActive = false;
        }else{
            this.navbarActive = true;
        }
    }
},

}
</script>

<style scope>
.topnav{
  overflow: hidden;
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.topnav a{
  float: left;
  color: black;
  text-align: center;
  padding: 16px 18px;
  font-size: 17px;
  --b: 0.1em;   /* the thickness of the line */
  --c: #4c55c4; /* the color */
  
  color: #0000;
  padding-block: var(--b);
  background: 
    linear-gradient(var(--c) 50%,#000 0) 0% calc(100% - var(--_p,0%))/100% 200%,
    linear-gradient(var(--c) 0 0) 0% var(--_p,0%)/var(--_p,0%) var(--b) no-repeat;
  -webkit-background-clip: text,padding-box;
          background-clip: text,padding-box;
  transition: .3s var(--_s,0s) linear,background-size .3s calc(.3s - var(--_s,0s));
}

.topnav a:hover{
  --_p: 100%;
  --_s: .3s;
}

.topnav a.active{
  background-color: #04AA6D;
  color: white;
}

.topnav .icon{
  display: none;
}

.logo{
  display: flex;
  justify-content: space-between;
  max-width: 100%;
  padding: 10px;
}

@media screen and (max-width: 600px) {
  .topnav{
    display: block;
    padding: 0;
  }

  .topnav .menu a {
    display: none;
  }

  .topnav a.icon{
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive{
    position: relative;
    display: block;
  }

  .topnav.responsive a{
    float: none;
    display: block;
    text-align: left;
  }
}
</style>