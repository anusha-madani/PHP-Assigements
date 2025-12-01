<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["name"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $department = $_POST["department"];
        $salary = $_POST["salary"];

        if ($salary < 25000) {
            $bonus = $salary * 0.05;
        } elseif ($salary >= 25000 && $salary < 50000) {
            $bonus = $salary * 0.10;
        } else {
            $bonus = $salary * 0.15;
        }

        $totalSalary = $salary + $bonus;

        echo "
        <div class='table-container'>
            <table border='2' cellspacing='0' cellpadding='12' style='border-collapse: collapse; width:70%; margin:auto; text-align:center;'>
                <h1 style='font-size:40px; font-weight:bold; margin-bottom:10px; margin-left:30%; margin-top:10%; color: #710976; '>EMPLOYES BOUNS CALCULATER</h1>

                <thead style='background:#f0f0f0;'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Bonus</th>
                        <th>Total Salary</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$contact</td>
                        <td>$department</td>
                        <td>$salary</td>
                        <td>$bonus</td>
                        <td>$totalSalary</td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";

    } else {
        echo "Somthing worng! No data Found";
    }

} else {
    echo "Error";
}
?>
