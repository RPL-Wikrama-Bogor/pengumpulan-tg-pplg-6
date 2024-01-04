//tugas 4
function hitungRataRataHarga(products, newProducts) {
   
    const semuaProduk = [...products, ...newProducts];
  
   
    const totalHarga = semuaProduk.reduce((total, produk) => total + produk.harga, 0);
  
     const rataRataHarga = totalHarga / semuaProduk.length;
  
    return rataRataHarga;
  }
  
  const products = [
    { nama: 'Produk 1', harga: 100 },
    { nama: 'Produk 2', harga: 50 },
    { nama: 'Produk 3', harga: 75 }
  ];
  
  const newProducts = [
    { nama: 'Produk Baru 1', harga: 120 },
    { nama: 'Produk Baru 2', harga: 80 }
  ];
  
  const rataRataHarga = hitungRataRataHarga(products, newProducts);
  console.log('Rata-rata harga produk:', rataRataHarga);
  