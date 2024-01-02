const students = [
    {
        nama: 'Machuu',
        nilai: 76
    },
    {
        nama: 'Onyy',
        nilai: 75
    },
];
const underperformingstudents = students.filter
    (student => student.nama == 'Onyy');

console.log(underperformingstudents);