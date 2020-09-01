<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 1em;
        }
        .error {
            color: crimson;
        }
        .flex {
            margin: 0;
            display: flex;
        }
    </style>
</head>
<body>

    <?php
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        $name = $email = $website = $comment = $gender = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letter and white space allowed";
                }
            }

            if(empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if(empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($comment);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>Form validation PHP</h2>
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Name:</label><input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?></span>
        </div>    
        <div>
            <label for="Email">E-mail:</label><input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?></span>
        </div>
        <div>
            <label for="website">Website:</label> <input type="text" name="website">
            <span class="error">* <?php echo $websiteErr; ?></span>
        </div>
        <div class="flex">
            <div>
            <label for="comment">Comment:</label>
            </div>
            <textarea name="comment" cols="30" rows="10"></textarea>
        </div>
        <div>
            Gender: 
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>
</body>
</html>