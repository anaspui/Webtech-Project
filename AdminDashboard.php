<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Body</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="AdminDash">
        <?php
        include('Connection.php');
        ?>
        <!-- <h2>Dashboard</h2> -->
        <fieldset style=" border: 4px solid #3B577D; border-bottom: none; border-left: none; border-right: none;">
            <legend style="text-align: left">
                <h1 align="center">Dashboard</h1>
            </legend>
        </fieldset>
        <div class="cardContainer">

            <a href="ViewCustomers.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Customers</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM users Where role = 'customer'";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
            <a href="ViewEmployee.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Employees</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM users Where role = 'employee'";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
            <a href="ViewHotel.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Hotels</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM hotels";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="cardContainer">
            <a href="ViewPackages.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Packages</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM packages";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
            <a href="TopSelling.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Package Sold</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM packages WHERE P_sold";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
            <a href="TopSelling.php">
                <div class="card">
                    <div class="card-header">
                        <h3>Top Selling</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include('Connection.php');
                        $sql = "SELECT * FROM packages WHERE P_sold ORDER BY P_sold DESC";
                        $result = mysqli_query($con, $sql);
                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <p>
                            <?php echo $num_rows; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>




</body>

</html>