//tugas 2
const buku = [
    { judul: 'Buku 1', genre: 'function' },
    { judul: 'Buku 2', genre: 'non-fiction' },
    { judul: 'Buku 3', genre: 'function' },
    { judul: 'Buku 4', genre: 'function' },
    { judul: 'Buku 5', genre: 'non-fiction' }
  ];
  
  const bukuFunction = buku.filter((buku) => buku.genre === 'function');
  
  console.log(bukuFunction);
