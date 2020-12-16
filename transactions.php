<?php
include ('authentication.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style1.css" type="text/css">

    <title>Welcome to FinoPlan</title>
  </head>
  <body>
    <!-- Side Navigation -->

        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
                <div class="p-4 pt-5">
                <h1><a href="index.php" class="logo">FinoPlan</a></h1>
            <ul class="list-unstyled components mb-5">
              <li>
                  <a href="index.php">Home</a>
              </li>
              <li>
                  <a href="spending.php">Spending</a>
              </li>
              <li>
                  <a href="transactions.php">Transactions</a>
              </li>
              <li>
                  <a href="categories.php">Categories</a>
              </li>
              <li>
              <a href="logout.php" name="logout">Log out</a>
              </li>
            </ul>

            <div class="footer">
                <p>
                    Welcome to Finoplan :)
                </p>
            </div>

          </div>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Transactions</h2>


<table class="table">
  <thead>
  <tr class="bg-danger">
    <th scope="col">Date</th>
    <th scope="col">Category</th>
    <th scope="col">Amount</th>
    <th scope="col">Note</th>
    <th scope="col">Remove</th>
  </tr>
  </thead>
  <h3>
  
  <small class="text-muted">Expense - <button type="button" class="btn btn-primary" onclick="window.location.href='spending.php'">Add Expense</button></small>
</h3>

  <?php
$conn = mysqli_connect("localhost", "root", "", "finoplan");
$usr = $_SESSION['username'];
$sql = "SELECT id, date, excat, eamount, note FROM $usr WHERE excat IS NOT NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>

      <td>" . $row['date'] . "</td>
      <td>" . $row['excat'] . "</td>
      <td>" . $row['eamount'] . "</td>
      <td>" . $row['note'] . "</td>
      <td><a href='deltran.php?id=$row[id]'>Delete</td>
</tr>";
    }
    echo "</table>";
}
else
{
    echo "0 result";
}
$conn->close();
?>

</table>


<table class="table">
  <thead>
  <tr class="bg-success">
    <th scope="col">Date</th>
    <th scope="col">Category</th>
    <th scope="col">Amount</th>
    <th scope="col">Note</th>
    <th scope="col">Remove</th>
  </tr>
  </thead>
  <h3>
  
  <small class="text-muted">Income - <button type="button" class="btn btn-primary" onclick="window.location.href='spending.php'">Add Income</button>
</small>
</h3>

  <?php
$conn = mysqli_connect("localhost", "root", "", "finoplan");
$sql = "SELECT id,date, incat, iamount, note FROM $usr WHERE iamount IS NOT NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>

      <td>" . $row['date'] . "</td>
      <td>" . $row['incat'] . "</td>
      <td>" . $row['iamount'] . "</td>
      <td>" . $row['note'] . "</td>
      <td><a href='deltranin.php?id=$row[id]'>Delete</td>
</tr>";
    }
    echo "</table>";
}
else
{
    echo "0 result";
}
$conn->close();
?>

</table>


      </div>
        </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
