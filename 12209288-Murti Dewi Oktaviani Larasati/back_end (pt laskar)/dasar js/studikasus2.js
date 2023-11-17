function applyDiscount(products) {
   
    const productsWithDiscount = products.map((product) => {
      const hargaDiskon = product.harga * 0.9; 
      return {
        ...product,
        harga: hargaDiskon
      };
    });
  
    return productsWithDiscount;
  }
  
 
  const daftarProduk = [
    { nama: 'Produk 1', harga: 100 },
    { nama: 'Produk 2', harga: 50 },
    { nama: 'Produk 3', harga: 75 }
  ];
  
 
  const produkDenganDiskon = applyDiscount(daftarProduk);
  console.log(produkDenganDiskon);
