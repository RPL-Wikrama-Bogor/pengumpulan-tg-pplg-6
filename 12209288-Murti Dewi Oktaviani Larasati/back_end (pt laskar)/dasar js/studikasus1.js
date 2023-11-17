const siswa = [
    {
      nama: 'murti',
      umur: 17,
      nilai: [95, 89, 70]
    },
    {
      nama: 'dewi',
      umur: 17,
      nilai: [88, 85, 70]
    },
    {
      nama: 'okta',
      umur: 19,
      nilai: [90, 85, 79]
    }
  ];
  
  function rataRataNilaiSiswa(siswa) {
    const rataRata = siswa.map(siswa => {
      const totalNilai = siswa.nilai.reduce((total, nilai) => total + nilai, 0);
      const rataRata = totalNilai / siswa.nilai.length;
      return { nama: siswa.nama, rataRata };
    });
  
    return rataRata;
  }
  
  const rataRataSiswa = rataRataNilaiSiswa(siswa);
  console.log(rataRataSiswa);