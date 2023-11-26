<!-- <script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it !" />
    </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style> -->
<!-- <script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it !" />
    </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style> -->
<!-- <template>
  <p>----------------templating----------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>----------------data binding----------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">mell</h1>
  <input :type="type">
  <p>----------------data binding----------------</p>
  {{ count == 0 ? count = 1 : count + 2 }}
  <p>----------------v-if----------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
  <div v-if="count == 1">
    number 1
  </div>  
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>----------------computed dan methods----------------</p>
  <button @click="counterNumber">{{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <input :type="type">
  <button @click="showPassword">show password</button>
  <p>----------------class dan style----------------</p>
  <ul>
    <li :class="{
      active:isActive, 
      fs40px:isActive
      }">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <P>-----------------list cendering--------------</P>
  <ul>
    <li v-for="(item, index) in daftarKelas"> {{ index +1 }} {{ item }}</li>
  </ul>
  <p>----------------v-model----------------</p>
  <input type="text" v-model="inputKelas"> {{ inputKelas }}
</template>

<script>
export default{
  data(){
    return{
      inputKelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 1 ,
      nama: 'amel',
      number: '1',
      kelas: '<h1>kelas</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isActive: true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
      if(this.type == 'password'){
        this.type = 'text';
      }else{
        this.type = 'password';
      }
    },
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
    },
    computed:{
      countComputed(){
        this.numberComputed += 6;
      }
    }
  }

</script>
<style>
.color{
  color: plum;
}
.fs40px{
  font-size: 30px;
}
.active{
  color: goldenrod ;
}
</style> -->
<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="masukan kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambahKelas">tambah siswa</button>

    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index +1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td><button @click="hapusDataKelas(murid.id)">hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default{
  data() {
    return {
      dataKelas: [{
        nama: 'amel',
        kelas: '11'
      }],
      formDataKelas:{
        nama:'',
        kelas: ''
      }
    }
  },
  methods:{
    tambahKelas(){
      this.formDataKelas.id = Date.now();
      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama: '',
        kelas: ''
      }
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  }
}
</script>