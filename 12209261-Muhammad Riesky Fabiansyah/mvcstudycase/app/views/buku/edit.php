<div class="container">
  <h3 class="mb-3">Edit Peminjaman</h3>
  <form action="<?= BASE_URL; ?>/buku/updateBarang" method="post">
    <div class="class-body">
      <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
      <div class="form-group mb-3">
        <label for="judul">Nama Peminjam</label>
        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['buku']['nama_peminjam']; ?>">
      </div>
      <div class="form-group mb-3">
        <label for="jenis_barang">Jenis Barang</label>
        <select name="jenis_barang" id="jenis_barang" class="form-control" value="<?= $data['buku']['jenis_barang']; ?>">
          <option hidden><?= $data['buku']['jenis_barang']; ?></option>
          <option value="Laptop">Laptop</option>
          <option value="Hp">Hp</option>
          <option value="Adapter Lan">Adapter Lan</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="no_barang">Nomor Barang</label>
        <input type="text" class="form-control" id="no_barang" name="no_barang" value="<?= $data['buku']['no_barang']; ?>">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_selesai">Tanggal Pinjam</label>
        <input type="datetime-local" value="<?= $data['buku']['tgl_pinjam']; ?>" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_kembali">Tanggal kembali</label>
        <input type="datetime-local" value="<?= $data['buku']['tgl_kembali']; ?>" class="form-control" id="tgl_kembali" name="tgl_kembali">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>