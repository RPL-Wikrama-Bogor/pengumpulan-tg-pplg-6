<template>
    <div>
        <div class="topnav container" :class="{ responsive: navbarActive }">
            <div class="logo">
                <div><img src="@/assets/img/logo.png" alt="logo"></div>
                <a class="icon" href="#" @click="navbar">
                    <img src="@/assets/img/hamburger.svg" alt="hamburger">
                </a>
            </div>
            <div class="menu">
                <router-link to="/">Home</router-link>
                <router-link to="/portofolio">Portfolio</router-link>
                <router-link to="/blog">Blog</router-link>
                <router-link to="/contact">Contact</router-link>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    data() {
        return {
            navbarActive: false
        }
    },
    methods: {
        navbar() {
            if (this.navbarActive) {
                this.navbarActive = false
            } else {
                this.navbarActive = true
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

.topnav a {
    float: left;
    color: black;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a {
    color: black;
    transition: transform 0.7s;
}

.topnav a::after {
    content: "";
    display: block;
    width: 0;
    height: 1.5px;
    background-color: #4c55c4;
    transition: 0.5s;
}

.topnav a:hover {
    transform: translateX(10px);
}

.topnav a:hover::after {
    width: 100%;
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

    .topnav.responsive {
        position: relative;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: right;
    }
}
</style>
