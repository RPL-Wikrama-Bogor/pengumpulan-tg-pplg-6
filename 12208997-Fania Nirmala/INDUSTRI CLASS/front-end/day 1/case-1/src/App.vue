<template>
  <div>
    <label>Nama: </label>
    <input type="text" v-model="formDataKelas.nama"><br>
    <br>
    <label>Rombel: </label>
    <input type="text" v-model="formDataKelas.kelas"><br>
    <br>
    <button @click="tambahKelas" style="margin-left: 170px;">Tambah</button><br>
    <br>
    <table border="2">
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td style="padding: 10px;">{{ index + 1 }}</td>
        <td style="padding: 10px;">{{ murid.nama }}</td>
        <td style="padding: 10px;">{{ murid.kelas }}</td>
        <td style="padding: 10px;"><button @click="hapusDataKelas(murid.id)">hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default{
  data() {
    return {
      dataKelas: [{
        nama: 'Machuu',
        kelas: 'PPLG XI'
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


