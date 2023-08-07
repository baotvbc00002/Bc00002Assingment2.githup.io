<?php
    require_once ("DatabaseConnect.php");

    $sql = "SELECT * FROM invoice
            INNER JOIN user ON invoice.user_id=user.user_ID";
    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage user</title>
    <script src="JS/Product_Manage_Script.js"></script>
    <style>
        body {
	background: #1690A7;
	display: flex;
	height: 100vh;
	flex-direction: column;
}
table#tbAddNewProduct{
    margin: auto;
    width: 50%;
    background-color: white;
    border-radius: 1%;
    padding: 50px;
}
table#userRegistration{
    margin: auto;
    width: 50%;
    background-color: white;
    border-radius: 1%;
    padding: 50px;
}
table#tblListProduct{
    margin: auto;
    width: 100%;
    background-color: white;
    border-radius: 1%;
    padding: 50px;
}
th#thAddProduct{
    text-align: center;
    font-size: large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color:  #84776B;
    background-color: white;
}
input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
textarea{
    display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
td#btnAddProduct{
    text-align: center;
    padding-top: 2%;
}
button {
	background: #555;
	color: #fff;
	border: none;
}

.btn{
    color:  #84776B;
}

textarea#ProductDescription{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


table#ListProduct{
    margin: auto;
    width: 100%;
    background-color: white;
    border-radius: 1%;
    padding: 50px;
}

tr#ListProductTitle{
    font-size: large;
    color:  #84776B ;
    text-align: center;
    
}

td.tdEdit{
    text-align: center;
}

table#tbLogin{
    margin: auto;
    width: 30%;
    background-color: white;
    border-radius: 1%;
    padding: 0.5%;
}
    </style>
</head>
<body>
    <table border="1" id="ListProduct">
        <tr id="ListProductTitle">
            <td colspan="6">LIST INVOICE</td>
        </tr>
        <tr>
            <th width="7%">ID</th>
            <th width="15%">User</th>
            <th width="15%">Total price</th>
            <th width="14%">Date</th>
            <th>Address</th>
            <th width="10%">Detail</th>
        </tr>

        <?php
            if(mysqli_num_rows($result) > 0)
                while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td class="tdEdit"><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_fullname']; ?></td>
            <td class="tdEdit"><?php echo number_format($row['total_price'],0); ?></td>
            <td class="tdEdit"><?php echo $row['create_date']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td class="tdEdit">
                <a href="index.php?page=InvoiceDetail&id=<?php echo $row['id']; ?>">Detail</a>
            </td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>