<template>
  <div>
    <table border="2px solid">
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Nis</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td>{{ murid.rayon }}</td>
        <td>{{ murid.nis }}</td>
        <td><button @click="hapusDataKelas(murid.id)">Hapus</button></td>
      </tr>
    </table>
    <br>
    <center>
    <tr>
      <td>Nama :</td>
      <td><input type="text" placeholder="Masukan Nama" v-model="formDataKelas.nama"></td>
    </tr>
    <tr>
      <td>Kelas :</td>
      <td><input type="text" placeholder="Masukan Kelas" v-model="formDataKelas.kelas"></td>
    </tr>
    <tr>
      <td>Rayon: </td>
      <td><input type="text" placeholder="Masukan Rayon" v-model="formDataKelas.rayon"></td>
    </tr>
    <tr>
      <td>Nis: </td>
      <td><input type="number" placeholder="Nis" v-model="formDataKelas.nis"></td>
    </tr>
    <button style="margin-top: 17px;" @click="tambahKelas">tambah siswa</button>
  </center>
  </div>
</template>

<script>
import '@/assets/style.css';
export default {
  data() {
    return {
      dataKelas: [{
        id: Date.now(),
        nama: 'Alfariz',
        kelas: 'super six',
        rayon: 'cic 3',
        nis: '0896123456'
      }],
      formDataKelas: {
        nama: '',
        kelas: '',
        rayon: '',
        nis: ''
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
        rayon: '',
        rayon: ''
      }
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  },
}
</script>