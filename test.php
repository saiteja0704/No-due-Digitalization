<?php
$con = mysqli_connect('localhost', 'root') or die('Unable To connect');
if ($con)
    mysqli_select_db($con, 'student');
$result = mysqli_query($con, "SELECT * FROM accounts");
?>

<html>

<head>
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script language="javascript" src="users.js" type="text/javascript">
        function setUpdateAction() {
            document.frmUser.action = "edit_user.php";
            document.frmUser.submit();

        }
    </script>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div style="width:500px;">
            <table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
                <tr class="listheader">
                    <td></td>
                    <td>Username</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($i % 2 == 0)
                        $classname = "evenRow";
                    else
                        $classname = "oddRow";
                ?>
                    <tr class="<?php if (isset($classname)) echo $classname; ?>">
                        <td><input type="checkbox" name="users[]" value="<?php echo $row["id"]; ?>"></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["rollnumber"]; ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                <tr class="listheader">
                    <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete" onClick="setDeleteAction();" /></td>
                </tr>
            </table>
    </form>
    </div>
</body>

</html>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>