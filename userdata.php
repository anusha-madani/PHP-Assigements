<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "
        <div class='table-container' style='width:50%; margin:auto; margin-top:40px;'>

            <table border='2' cellpadding='12' style='border-collapse: collapse; width:100%; text-align:center;'>
                <h1 style='font-size:40px; margin-bottom:10px; margin-left:35%; color: #2747c5;  font-weight:bold;'>USER DATA</h1>

                <thead>
                    <tr style='background:#f0f0f0;'>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$password</td>
                    </tr>
                </tbody>
            </table>

        </div>
        ";
    } 
    else {
        echo "WARNING! something worng";
    }

} else {
    echo "Error: No data recieved";
}
?>
