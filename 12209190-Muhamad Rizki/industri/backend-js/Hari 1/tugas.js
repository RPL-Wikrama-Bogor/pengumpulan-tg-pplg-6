const student = [
    {
        nama: "Restu",
        umur: 20, 
        nilai: [90, 85, 88]
    },
    {
        nama: "Jhon",
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: "Bob",
        umur: 21,
        nilai: [88, 91, 78]
    },
];

// Buatlah sebuah fungsi javascript yang menggunakan map untuk mengembalikan rata rata nilai siswa
function rataratanilaisiswa(dataSiswa) {
    const nilaiRataRata = dataSiswa.map(siswa => {
        const totalNilai = siswa.nilai.reduce((total, current) => total + current, 0);
        const rataRata = totalNilai / siswa.nilai.length;
        return {
            nama: siswa.nama,
            rataRataNilai: rataRata
        };
    });

    return nilaiRataRata;
}
const nilaiRataRataSiswa = rataratanilaisiswa(student);
console.log(nilaiRataRataSiswa);

const map =student.map(student => {
    const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
    const rataRata = totalNilai / student.nilai.length;

    return {
        ...student,
        rataRata
    }
});
console.log(map);