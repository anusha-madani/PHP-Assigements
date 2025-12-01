<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $rollno = $_POST["rollno"];
    $email = $_POST["email"];


    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $sub3 = $_POST["sub3"];
    $sub4 = $_POST["sub4"];
    $sub5 = $_POST["sub5"];
    $sub6 = $_POST["sub6"];
    $sub7 = $_POST["sub7"];

    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6 + $sub7;
    $percentage = ($total / 700) * 100;

    
    if ($percentage >= 80) {
        $grade = "A+";
    } elseif ($percentage >= 70) {
        $grade = "A";
    } elseif ($percentage >= 60) {
        $grade = "B";
    } elseif ($percentage >= 50) {
        $grade = "C";
    } else {
        $grade = "Fail";
    }

    echo "
    <div class='table-container'>
        <table border='2' cellpadding='10' style='border-collapse: collapse; width:60%; margin: auto;'>
            <h1 style='font-size:42px; margin-bottom:10px; margin-left :35%; margin-top :30px; color: #4d3a3a;'>STUDENT MARKSHEET</h1>

            <thead>
                <tr style='background:#f0f0f0;'>
                    <th>Roll Number</th>
                    <th>Student Name</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>$rollno</td>
                    <td>$name</td>
                    <td>$email</td>
                </tr>
            </tbody>
        </table>
        <br><br>

        <table border='2' cellpadding='10' style='border-collapse: collapse; width:60%; margin: auto;'>
            <thead>
                <tr style='background:#f0f0f0;'>
                    <th>Subject Marks (7)</th>
                    <th>Obtained</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Subject 1</td><td>$sub1</td></tr>
                <tr><td>Subject 2</td><td>$sub2</td></tr>
                <tr><td>Subject 3</td><td>$sub3</td></tr>
                <tr><td>Subject 4</td><td>$sub4</td></tr>
                <tr><td>Subject 5</td><td>$sub5</td></tr>
                <tr><td>Subject 6</td><td>$sub6</td></tr>
                <tr><td>Subject 7</td><td>$sub7</td></tr>
            </tbody>
        </table>
        <br><br>

        <table border='2' cellpadding='10' style='border-collapse: collapse; width:60%; margin:auto;'>
            <thead>
                <tr style='background:#f0f0f0;'>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>$total / 700</td>
                    <td>".round($percentage,2)."%</td>
                    <td>$grade</td>
                </tr>
            </tbody>
        </table>
    </div>
    ";
} 
else {
    echo "Error: No data Found";
}}
?>
