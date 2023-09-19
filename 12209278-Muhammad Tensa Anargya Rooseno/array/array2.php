<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>

    <?php
    $students = array(
        array('John Doe', 20, '2003-05-10', '12209278', 'PPLG-XI 6', 'Cicurug 7'),
        array('Jane Smith', 17, '2006-02-15', '12205467', 'PPLG-XI 5', 'Cicurug 7'),
        array('Bob Johnson', 19, '2002-09-20', '12205678', 'PPLG-XI 6', 'Cicurug 7'),
        array('Alice Brown', 18, '2004-11-08', '12206789', 'PPLG-XI 5', 'Cicurug 7'),
        array('Ella White', 20, '2003-08-25', '12207890', 'PPLG-XI 6', 'Cicurug 7'),
        array('David Lee', 18, '2004-03-14', '12208901', 'PPLG-XI 5', 'Cicurug 7'),
        array('Grace Turner', 19, '2002-12-30', '12209012', 'PPLG-XI 6', 'Cicurug 7'),
        array('Michael Harris', 17, '2006-05-05', '12200123', 'PPLG-XI 5', 'Cicurug 7'),
        array('Olivia Martin', 20, '2003-01-12', '12201234', 'PPLG-XI 6', 'Cicurug 7'),
        array('William Clark', 18, '2004-07-19', '12202345', 'PPLG-XI 5', 'Cicurug 7'),
        array('Sophia Allen', 19, '2002-10-08', '12203456', 'PPLG-XI 6', 'Cicurug 7'),
        array('James Wilson', 20, '2003-06-22', '12206789', 'PPLG-XI 5', 'Cicurug 7'),
        array('Ava Davis', 18, '2004-04-03', '12207890', 'PPLG-XI 6', 'Cicurug 7'),
        array('Mason Brown', 17, '2006-03-01', '12208901', 'PPLG-XI 5', 'Cicurug 7'),
        array('Emily Anderson', 19, '2002-11-15', '12209012', 'PPLG-XI 6', 'Cicurug 7')
    );


    function filterStudents($students) {
        $filteredStudents = array();
        foreach ($students as $student) {
            if ($student[1] >= 18) {
                $filteredStudents[] = $student;
            }
        }
        return $filteredStudents;
    }

    function searchStudents($students, $searchQuery) {
        $searchResults = array();
        foreach ($students as $student) {
            $name = $student[0];
            if (stripos($name, $searchQuery) !== false) {
                $searchResults[] = $student;
            }
        }
        return $searchResults;
    }   

    if (isset($_POST['filter'])) {
        $students = filterStudents($students);
    }

    if (isset($_POST['search'])) {
        $searchQuery = $_POST['searchQuery'];
        if (!empty($searchQuery)) {
            $students = searchStudents($students, $searchQuery);
        }
    }
    ?>

    <form method="post">
        <input type="submit" name="filter" value="Filter 18+">
        <input type="text" name="searchQuery" placeholder="Search by name">
        <input type="submit" name="search" value="Search">
    </form>

    <table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>NIS</th>
        <th>Rombel</th>
        <th>Rayon</th>
    </tr>
    <?php
    $count = 1;
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>$count</td>";
        echo "<td>{$student[0]}</td>"; // Name
        echo "<td>{$student[1]}</td>"; // Age
        echo "<td>{$student[2]}</td>"; // Date of Birth
        echo "<td>{$student[3]}</td>"; // NIS
        echo "<td>{$student[4]}</td>"; // Rombel
        echo "<td>{$student[5]}</td>"; // Rayon
        echo "</tr>";
        $count++;
    }
    ?>
</table>


</body>
</html>
