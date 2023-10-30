<div class="container">
  <h3 class="mb-3">Tambah Barang</h3>
  <form action="<?= BASE_URL; ?>/buku/simpanBarang" method="post">
    <div class="class-body">
      <div class="form-group mb-3">
        <label for="judul">Nama Peminjam</label>
        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
      </div>
      <div class="form-group mb-3">
        <label for="jenis_barang">Jenis Barang</label>
        <select name="jenis_barang" id="jenis_barang" class="form-control">
          <option hidden>PILIH</option>
          <option value="Laptop">Laptop</option>
          <option value="HP">Hp</option>
          <option value="Adaptor LAN">Adaptor Lan</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="tgl_selesai">Nomor Barang</label>
        <input type="text" class="form-control" id="no_barang" name="no_barang">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_selesai">Tanggal Pinjam</label>
        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>