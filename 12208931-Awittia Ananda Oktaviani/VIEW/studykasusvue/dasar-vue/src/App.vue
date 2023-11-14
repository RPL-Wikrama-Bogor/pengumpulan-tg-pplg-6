<!-- <template>
<p>-------------------templating-------------------</p>
{{ nama }}
{{ number }}
<div v-html="kelas"></div>

<p>------------------data binding--------------------</p>

<button :disabled="nonaktif">button</button>
<h1 v-bind="property">awit</h1>
<input :type="typeInput">

<p>------------------data binding--------------------</p>
{{ count == 0 ? count + 1 : count + 2 }}

<p>------------------v-if--------------------</p>

<button v-if="show">submit</button>
<button v-show="show">submit</button>

<div v-if="count==1">
number 1
</div>
<div v-else-if="count==2">
  number 2
</div>
<div v-else>
lebih dari 2
</div>
<p>------------------computed dan methods--------------------</p>
<button @click="counterNumber">methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button> 

<input :type="typeInput">
<button @click="showPassword">Show Password</button>
<button @click="counterNumber">methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button>

<p>------------------class and style--------------------</p>

<ul>
  <li :class="{ 
    active: isActive,
    fs40px: isActive
     }">
    test
  </li>
</ul>
<button @click="UbahWarna">ubah warna</button>

<p>------------------list rendering--------------------</p>
<ul>
  <li v-for="(item, index) in daftarKelas"> {{ index +1 }}{{ item }}</li>
</ul>

<p>------------------v-model--------------------</p>
<input type="text" v-model="Inputkelas"> 
{{ Inputkelas }}
</template>



<script>
export default{
  data() {
    return {
      Inputkelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      // typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 1,
      nama : 'awittia',
      number : 1,
      kelas : '<h1>kelas 11</h1>',
      nonaktif: false,
      property: { 
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
      if(this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },
    UbahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else {
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
.color {
  color: red;
}
.fs40px{
  font-size: 40px;
}

.active{
  color: green;
}
</style>
 -->


<template>
  <div>
    <input type="text" placeholder="masukkan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="masukkan kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambahKelas">Tambah Siswa</button>
    <table>
      <tr>
        <th> Id </th>
        <th> Nama </th>
        <th> Kelas </th>
        <th> Aksi </th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td><button @click="hapusDataKelas(murid.id)">Hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      dataKelas: [{
        id: Date.now(),
        nama: 'awittia',
        kelas: 'pplg xi-6'
      }],
      formDataKelas: {
        nama:'',
        kelas:''
      }
    }
  },
  methods: {
  tambahKelas() {
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