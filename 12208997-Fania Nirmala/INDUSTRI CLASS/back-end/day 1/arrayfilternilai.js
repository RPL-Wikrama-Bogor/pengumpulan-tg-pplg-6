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
    (student => student.nilai <=75);

console.log(underperformingstudents);