<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Registration Form</title>
    </head>
    <h1>Blood Donation</h1>
    <body bgcolor="FBB917">
        <div><h2>REGISTRATION FORM</h2></div>
        <form action="./connect1.php" method="POST">
            <lable for="user">NAME:</lable><br>
            <input type='text' name='Name' id="name" required/><br><br>

            <lable for="user">Email:</lable><br>
            <input type='email' name='email' id="email" required/><br><br>

            <lable for="phone">PHONE:</lable><br>
            <input type='text' name='phone' id="phone" required/><br><br>

            <lable for="bgroup">BGROUP:</lable><br>
            <input type='text' name='bgroup' id="bgroup" required/><br><br>

            <input type='submit' name='submit' id="submit"/>


        </form>

    </body>
</html>