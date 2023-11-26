<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="formdatakelas.nama">
    <br>
    <input type="text" placeholder="masukan rombel" v-model="formdatakelas.kelas">
    <br>
    <button @click="tambahkelas">tambah siswa</button>

    <table>
      <tr>
        <th>id</th>
        <th>nama</th>
        <th>kelas</th>
      </tr>
      <tr v-for="(murid, index) in datakelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama}}</td>
        <td>{{ murid.kelas }}</td>
        <td><button @click="hapusdatakelas(murid.id)">hapus</button></td>
      </tr>
    </table>
  </div>
  </template>
  <script>
  export default {
    data(){
      return {
        datakelas: [{
          nama: 'rizki',
          kelas:'11',
        }],
        formdatakelas:{
          nama:'',
          kelas:'',
        }
      }
    },
    methods:{
      tambahkelas(){
        this.datakelas.push(this.formdatakelas);

        this.datakelas.push(this.fromdatakelas);
        this.formdatakelas ={
          nama:'',
          kelas:''
        }
      },
      hapusdatakelas(id){
        this.datakelas =this.datakelas.filter(item => item.id != id);
      }
    }
  }
</script>