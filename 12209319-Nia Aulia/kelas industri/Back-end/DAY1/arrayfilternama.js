const students = [
    {
        nama: 'Niaa',
        nilai: 76
    },
    {
        nama: 'Aulia',
        nilai: 75
    },
];
const underperformingstudents = students.filter
    (student => student.nama == 'Aulia');

console.log(underperformingstudents);