<template>
  <div>
    <input type="text" placeholder="Masukan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="Masukan kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambahKelas">Tambah siswa</button>

    <table>
      <tr>
        <th> Id </th>
        <th> Nama </th>
        <th> Kelas </th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td><br>  
        <td><button @click="hapusDataKelas(murid.id)">Hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data(){
    return {
      dataKelas: [{
        id: Date.now(),
        nama: 'radit',
        kelas: '10'
      }],
      formDataKelas:{
        nama:'',
        kelas:'',
      }
    }
  },
  methods: {
    tambahKelas() {
      this.formDataKelas.id = Date.now();

      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama: '',
        kelas: '',
      }
    },
    hapusDataKelas(id){
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  }
}
</script>