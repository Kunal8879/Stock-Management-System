<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Add Faculty</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #00b3aa;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #00b3aa;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
    </style>
</head>

<body>

    <div style="margin: 90px;">
        <header>
            <img src="image/logo3.png" alt="" class="site-logo">
            <nav class="navnavnav">
                <ul>
                    <li><a href="index_admin.php">Home</a></li>


                </ul>
                </li>
                </ul>
            </nav>
        </header>
    </div>

    <form action="" method="post">
        <div class="container">
            <h1>Add faculty details</h1>
            <hr>


            <label for="psw"><b>Firstname</b></label>
            <input type="text" class="info-input" name="firstname" placeholder="First Name" required />

            <label for="psw-repeat"><b>Middlename</b></label>
            <input type="text" class="info-input" name="middlename" placeholder="Middle Name" required />

            <label for="psw-repeat"><b>Lastname</b></label>
            <input type="text" class="info-input" name="lastname" placeholder="Last Name" required />

            <label for="psw"><b>Username</b></label>
            <input type="text" class="info-input" name="username" placeholder="Username" required />

            <label for="psw"><b>Faculty Id</b></label>
            <input type="text" class="info-input" name="fid" placeholder="Apsit Faculty Id" required />


            <label for="psw"><b>Faculty Role</b></label>
            <label class="container">Admin
                <input type="radio" checked="checked" name="role" value="1">

            </label>
            <label class="container">Faculty
                <input type="radio" name="role" value="0">

            </label>



            <hr>


            <button type="submit" name="submit" class="registerbtn">Add</button>
        </div>


    </form>
</body>

</html>