<div class="container">
    <h3 class="mb-3">Daftar Buku</h3>
    <br>
        <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah buku</a>
        <br>
        <br>
        <table class="table table-success table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach ($data['buku'] as $row) :?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['Judul']; ?></td>
                        <td><?= $row['Penulis']; ?></td>
                        <td><?= $row['tgl_selesai']; ?></td>
                        <td>
                            <a href="<?= BASE_URL ?>/buku/edit/<?= $row['ID'] ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['ID'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; endforeach?>
            </tbody>
        </table>
</div>