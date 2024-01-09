<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="masukan kelas" v-model="formDataKelas.Kelas">
    <br>
    <button @click="tambahKelas">tambah siswa</button>
    <table>
      <tr>
        <th>Id</th>
        <th>nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.Kelas }}</td>
        <td><button @click="hapusDataKelas(murid.id)">hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return{
      dataKelas: [{
        nama: 'azka',
        Kelas: 11
      }],
      formDataKelas:{
        nama:'',
        Kelas:'',
      }
    }
  },
  methods: {
    tambahKelas(){
      this.formDataKelas.id = Date.now();

      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama: '',
        Kelas: '',
      }
    },
    hapusDataKelas(id){
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  }
}
</script>