<template>
  <Navbar></Navbar>
  <div class="container">
    <router-view></router-view>
  </div>
</template>

<script setup>
import Navbar from './components/Layouts/Navbar.vue';
</script>