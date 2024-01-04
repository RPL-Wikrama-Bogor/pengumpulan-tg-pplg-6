<div class="container">
  <h3 class="mb-3">Daftar Peminjaman</h3>
  <br>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Pinjam</a>

    <form class="form-inline" method="post" action="<?= BASE_URL ?>/buku/cariData">
      <input class="form-control mr-2 mb-2" type="search" placeholder="Search" aria-label="Search" name="katakunci" id="katakunci">
      <button class="btn btn-outline-success" type="submit" name="bcari">Search</button>
      <a href="<?= BASE_URL; ?>/buku/index" class="btn btn-outline-danger">Reset</a>
    </form>
  </div>
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Peminjam</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Nomor Barang</th>
        <th scope="col">Tanggal Pinjam</th>
        <th scope="col">Tanggal Kembali</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $no = 1; ?>
        <?php foreach ($data['buku'] as $row) : ?>
          <?php date_default_timezone_set("asia/jakarta"); ?>
          <td><?= $no; ?></td>
          <td><?= $row['nama_peminjam'] ?></td>
          <td><?= $row['jenis_barang'] ?></td>
          <td><?= $row['no_barang'] ?></td>
          <td><?= $row['tgl_pinjam'] ?></td>
          <td><?= $row['tgl_kembali'] ?></td>
          <td><?php
              $tglkembali = $row['tgl_kembali'];
              $tglpinjam = $row['tgl_pinjam'];
              $now = date('Y-m-d H:i:s');

              $showeditbutton = true;

              if ($tglpinjam >= $tglkembali || $now >= $tglkembali) {
                echo '<span class="badge bg-success">Sudah Kembali</span>';
                $showeditbutton = false;
              } else {
                echo '<span class="badge bg-danger">Belum Kembali</span>';
                $showeditbutton = true;
              }
              ?>
          </td>
          <td>
            <?php if ($showeditbutton) : ?>
              <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
            <?php endif; ?>
            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data? ');">Hapus</a>
          </td>
      </tr>
    <?php $no++;
        endforeach; ?>
    </tbody>
  </table>
</div>

