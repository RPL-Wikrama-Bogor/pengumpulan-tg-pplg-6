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
    (student => student.nilai <=75);

console.log(underperformingstudents);