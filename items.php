<?php
require 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <!-- navigation bar -->
    <div style="margin: 90px;">
        <header>
            <img src="./css/logo.png" alt="" class="site-logo">
            <nav class="navnavnav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Items +</a>
                        <ul>
                            <li><a href="items.php">Items</a></li>
                            <li><a href="allocate.php">Allocate</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Labs</a></li>
                    <li><a href="#">Supplier</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItemModal" style=" margin-left: 50px; background-color: #00b3aa;">&plus;NEW</button>
    <div class="modal fade" id="addItemModal" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemModalLabel">ENTER ITEM DETAILS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./actions/add_item.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="item" name="item_name" placeholder="Enter Item Name" required>
                            <label class="form-label">ITEM:</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="category" name="item_category" placeholder="Enter Category" required>
                            <label class="form-label">CATEGORY:</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="details" name="item_details" placeholder="Enter Details" required>
                            <label class="form-label">DETAILS:</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="supplier" name="supplier_name" placeholder="Enter Supplier Name" required>
                            <label class="form-label">SUPPLIER:</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="bill" name="bill_no" placeholder="Enter Bill No." required>
                            <label class="form-label">BILL:</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #00b3aa;">Close</button>
                            <button type="submit" name="add-item" class="btn btn-primary" style="background-color: #00b3aa;">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <h3 class="text-muted text-center">ALL ITEMS</h3>

    <!-- table -->

    <table class="content-table" style="border-collapse: separate;">
        <thead>
            <tr>
                <th>SR.</th>
                <th>ITEM</th>
                <th>CATEGORY</th>
                <th>DETAILS</th>
                <th>SUPPLIER</th>
                <th>LABS</th>
                <th>SUPPLIED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'db_connect.php';
            // $sql = "SELECT * FROM item INNER JOIN lab INNER JOIN supplier ON item.lab_id = lab.lab_id AND item.supplier_id = supplier.supplier_id";
            $sql = "SELECT * FROM item";
            $sql_run = mysqli_query($conn, $sql);

            if (mysqli_num_rows($sql_run) > 0) {
                foreach ($sql_run as $item) {
            ?>
                    <tr>
                        <td><?= $item['item_id'] ?></td>
                        <td><?= $item['item_name'] ?></td>
                        <td><?= $item['item_cat'] ?></td>
                        <td><?= $item['item_detail'] ?></td>
                        <td><?= $item['supplier_name'] ?></td>
                        <td><?= $item['lab_no'] ?></td>
                        <td><?= $item['supplied_at'] ?></td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItemModal" style=" margin: 0px 1px; padding: 4px 7px; font-size: 15px;">Edit</button>
                            <div class="modal fade" id="editItemModal" aria-labelledby="editItemModallabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editItemModalLabel">ENTER ITEM DETAILS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="./actions/add_item.php" method="POST">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="item" name="item_name" value="<?php echo $item['item_name']; ?>" required>
                                                    <label class="form-label">ITEM:</label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="category" name="item_category" value="<?php echo $item['item_cat']; ?>" required>
                                                    <label class="form-label">CATEGORY:</label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="details" name="item_details" value="<?php echo $item['item_detail']; ?>" required>
                                                    <label class="form-label">DETAILS:</label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="supplier" name="supplier_name" value="<?php echo $item['supplier_name']; ?>" required>
                                                    <label class="form-label">SUPPLIER:</label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="bill" name="bill_no" value="<?php echo $item['bill_no']; ?>" required>
                                                    <label class="form-label">BILL:</label>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="background-color: #00b3aa;">Cancel</button>
                                                    <button type="submit" name="add-item" class="btn btn-primary" style="background-color: #00b3aa;">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItemModal" style=" margin: 1px; padding: 5px; font-size: 13px;">DELETE</button>
                        </td>
                    </tr>

            <?php
                }
            } else {
                echo 'No Data Found!!';
            }
            ?>
        </tbody>
    </table>

    <hr>

    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</body>

</html>