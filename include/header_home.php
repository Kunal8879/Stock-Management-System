<?php
session_start();
$srole = $_SESSION['user'];
$username = $_SESSION['username'];
$lab_no = $_SESSION['lab_no'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a70a238af9.js" crossorigin="anonymous"></script>
</head>

<body>
    <script src="../css/bootstrap.js"></script>
    <script src="../include/search.js"></script>
    <script src="../include/sort.js"></script>

    <!-- navigation bar -->
    <div style="margin: 90px;">
        <header>
            <?php
            if ($srole == null) {

                echo "<img src='../images/logo3.png' alt='Logo' class='site-logo'>";
            } else {
            ?>

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <?php echo "<a href='add_pc_details_clone.php?lab_no=$lab_no'>Add Pc Details</a>
                    <a href='#'>Upload TimeTable</a>"; ?>


                    <script>
                        function openNav() {
                            document.getElementById("mySidenav").style.width = "200px";
                        }

                        function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                        }
                    </script>


                </div>

            <?php
            }
            ?>

            <?php
            if ($srole == 'Admin' || $srole == 'Faculty') {
                echo "<span style='font-size:30px;cursor:pointer;margin-left:20px;' onclick='openNav()'>&#9776;</span>";
            }
            ?>


            <?php if ($srole == 'Admin') { ?>
                <nav class="navnavnav">
                    <ul>
                        <li><a href="../home.php">Home</a></li>
                        <li><a href="#">Items &plus;</a>
                            <ul style="padding: 0;">
                                <li><a href="../items.php" style="padding: 7px; text-align: center;">Items</a></li>
                                <li><a href="../allocate.php" style="padding: 7px; text-align: center;">Allocate</a></li>
                            </ul>
                        </li>
                        <li><a href="../lab.php">Labs</a></li>
                        <li><a href="../supplier.php">Supplier</a></li>
                        <li><a href="../card.php"><i class="fa-solid fa-user"></i><?php echo " " . $srole; ?></a>
                            <ul style="padding: 0; margin: 0; text-align: center;">
                                <li><a href="../manage_faculty_details.php" style="padding: 0px;">Manage Faculty</a></li>
                                <li><a href="../logout.php">Logout</a></li>
                            </ul>
                        </li>
                </nav>
            <?php } elseif ($srole == 'Faculty') { ?>
                <nav class="navnavnav">
                    <ul>
                        <li><a href="../lab_faculty.php">Home</a></li>

                        <li><a href="../card.php"><i class="fa-solid fa-user"></i><?php echo " " . $srole; ?></a>
                            <ul style="padding: 0; margin: 0; text-align: center;">
                                <li><a href="../logout.php">Logout</a></li>
                            </ul>
                        </li>
                </nav>
            <?php } else { ?>
                <nav class="navnavnav">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../login.php">LogIn</a></li>
                        </li>
                </nav>
            <?php } ?>
        </header>
    </div>