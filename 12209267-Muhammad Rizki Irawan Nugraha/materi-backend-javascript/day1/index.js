const students = [
    {
        nama: "John",
        umur: 20,
        nilai: [90, 85, 88]
    },
    {
        nama: "Alice",
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: "Japra",
        umur: 45,
        nilai: [88, 91, 78]
    },
];

function calculateAverage(student) {
    const totalNilai = student.nilai.reduce((accumulator, currentNilai) => accumulator + currentNilai, 0);
    const average = totalNilai / student.nilai.length;
    return {
        nama: student.nama,
        rataNilai: average,
    };
}

const averageNilaiSiswa = students.map(calculateAverage);

console.log(averageNilaiSiswa);