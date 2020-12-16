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
        <h2 class="mb-4">Spendings</h2>
<div class="col-md-12">
                <h2 class="text-center">Add Expense</h2>
                <hr><br>
                <form action="expensecode.php" method="POST">
                    <div class="form-group">
                        <label for="budgetTitle">Expense Category Name</label>
<select name="catos" class="form-control form-control-lg">
  <option value="" disabled selected> - Select Category - </option>
  <?php
  $usr = $_SESSION['username'];

$con = mysqli_connect('localhost', 'root', '', 'finoplan');
$sql = "SELECT excat FROM $usr WHERE excat IS NOT NULL";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result))
{

?>
    <option value="<?=$row['excat']; ?>"><?=$row['excat']; ?></option>
<?php
} ?>
</select>
                        <label for="budgetTitle">Date</label>
                        <input type="hidden" name="id" value="0">
                        <input name="date" type="text" name="budget" class="form-control" id="budgetTitle" placeholder="20-12-31" required="" autocomplete="on" value=<?php
    $currentDateTime = date('Y-m-d');
    echo $currentDateTime;
?>>
                        <label for="budgetTitle">Note</label>
                        <input type="hidden" name="id" value="0">
                        <input name="note" type="text" name="budget" class="form-control" id="budgetTitle" placeholder="Any note?" required="" autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input name="amount" type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required="" value="">
                    </div>
                                        <button type="submit" name="save" class="btn btn-primary btn-block">Add Expense</button>
                                    </form>

            </div>
            <br>
<div class="col-md-12">
                <h2 class="text-center">Add Income</h2>
                <hr><br>
                <form action="incomecode.php" method="POST">
                    <div class="form-group">
                        <label for="budgetTitle">Income Category Name</label>
                        <select name="catos" class="form-control form-control-lg">
  <option value="" disabled selected> - Select Category - </option>
  <?php
$con = mysqli_connect('localhost', 'root', '', 'finoplan');
$sql = "SELECT incat FROM $usr WHERE incat IS NOT NULL";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result))
{

?>
    <option value="<?=$row['incat']; ?>"><?=$row['incat']; ?></option>
<?php
} ?>
</select>
<label for="budgetTitle">Date</label>
                        <input type="hidden" name="id" value="0">
                        <input name="date" type="text" name="budget" class="form-control" id="budgetTitle" placeholder="" required="" autocomplete="on" value=<?php
    $currentDateTime = date('Y-m-d');
    echo $currentDateTime;
?>>
                        <label for="budgetTitle">Note</label>
                        <input type="hidden" name="id" value="0">
                        <input name="note" type="text" name="budget" class="form-control" id="budgetTitle" placeholder="Any note?" required="" autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input name="amount" type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required="" value="">
                    </div>
                                        <button type="submit" name="save" class="btn btn-primary btn-block">Add Income</button>
                                    </form>

            </div>
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
