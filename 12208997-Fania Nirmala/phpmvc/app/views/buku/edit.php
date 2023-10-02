<div class="container">
    <h3 class="mb-3">Edit Buku : <?= $data['buku']['Judul']?></h3>
    <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['ID']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="Judul" name="judul" value="<?= $data['buku']['Judul'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="Penulis" name="penulis" value="<?= $data['buku']['Penulis'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $data['buku']['tgl_selesai'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>