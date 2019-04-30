<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <p>Sign In</p>
        <hr class="seperation">
        <p class="warning"><b>WARNING</b>: This platform is visible only for NASA employers, if you are not
            a NASA employer and you try to access this platform, you'll be sued by the U.S department of Security.
        </p>

        <hr class="seperation">
        <div class="div-input">
            <form method="post" action="secrets.php">
                <div class="input-container">
                    <label class="block">Username</label>
                    <input type="text" name="username" class="textInput" required>
                </div>
                <div class="input-container">
                    <label class="block">Voucher</label>
                    <input type="password" name="password" class="textInput" required>
                </div>
                <div class="input-container">
                    <input type="submit" value="Check In">
                </div>

            </form>
        </div>

    </div>
</body>

</html>