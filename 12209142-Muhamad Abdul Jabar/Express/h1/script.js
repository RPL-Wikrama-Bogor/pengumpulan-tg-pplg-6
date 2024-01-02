
// ===============================
const showAlert = () => {
    alert('this is an alert');
}
// ===============================


// ===============================

const students = [
    {
        nama: "Jhon",
        umur: 20,
        nilai: [90, 85, 88]
    },
    {
        nama: "Alice",
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: "Bob",
        umur: 21,
        nilai: [88, 91, 78]
    }
];

// mempilkan rata-rata nilai dari setiap nilai siswa

const map =  students.map(students => {
    const totalNilai = students.nilai.reduce((total,nilai) => total + nilai, 0)
    const rata =  totalNilai / students.nilai.length;
    return {
        ...students,
        rataRata: rata
            
    }
})


console.log(map)
// ===============================


// ===============================


 students.map(students => {
    return {
        ...students,
        rataRata
            
    }
})

// kode diatas sama denga seperti ini

students.map(function(student){



})

// ===============================



