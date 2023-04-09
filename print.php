<html>
<title> Print </title>
<head>
    <style>
        html {font-family:"century gothic";}
        body {text-align:left; background-color: white;}
        h3 {font-size: 20px;}
        p {font-size: 20px;}
        input[type=submit] {
            width: 100px;
            padding: 2px 4px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px; 
            font-size: 20px;
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["fname"].' '.$_POST["sname"];
            $email = $_POST["email"];
            $len = strlen($_POST["pwd"]);
            echo ("<h3>Hello, $name <hr></h3>");
            echo ("Your email is: <b> $email </b> <br>");
            echo ("Your password has <b> $len characters </b> <br><br>");
                if ($_POST["pwd"] != $_POST["cpwd"]) {
                    echo("Passwords did not match.");
                } else {
                    echo("Passwords matched.");
                }
            } else {
                echo("<br><br><br><br><br><br><br><br><br><br>");
                echo("<h1><br>Error</h1>");
            }
        ?>
    </p>
        <form action="Aranzadoact3.php"> <br>
        <input type="submit" value="Go Back">
    </style>
</body>
</html>