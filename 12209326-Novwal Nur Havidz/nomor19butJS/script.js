function hitungKeuntungan() {
    const vipTiket = parseInt(document.getElementById('Vip').value);
    const eksekutifTiket = parseInt(document.getElementById('Eksekutif').value);
    const ekonomiTiket = parseInt(document.getElementById('Ekonomi').value);

    const vipKeuntungan = hitungKeuntunganKelas(vipTiket, 35, 20, 0.25, 0.15, 0.05);
    const eksekutifKeuntungan = hitungKeuntunganKelas(eksekutifTiket, 40, 20, 0.20, 0.10, 0.02);
    const ekonomiKeuntungan = ekonomiTiket * 0.07;

    const totalTiket = vipTiket + eksekutifTiket + ekonomiTiket;
    const totalKeuntungan = vipKeuntungan + eksekutifKeuntungan + ekonomiKeuntungan;

    document.getElementById('VipKeuntungan').textContent = vipKeuntungan.toFixed(2);
    document.getElementById('EksekutifKeuntungan').textContent = eksekutifKeuntungan.toFixed(2);
    document.getElementById('EkonomiKeuntungan').textContent = ekonomiKeuntungan.toFixed(2);

    document.getElementById('TotalTiket').textContent = totalTiket;
    document.getElementById('TotalKeuntungan').textContent = totalKeuntungan.toFixed(2);
}

function hitungKeuntunganKelas(jumlahTiket, ambang1, ambang2, keuntungan1, keuntungan2, keuntungan3) {
    if (jumlahTiket >= ambang1) {
        return jumlahTiket * keuntungan1;
    } else if (jumlahTiket >= ambang2) {
        return jumlahTiket * keuntungan2;
    } else {
        return jumlahTiket * keuntungan3;
    }
}