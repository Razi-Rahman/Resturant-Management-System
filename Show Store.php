<?php  
require_once 'Controller/StoreInfo.php';

$products = fetchProducts($_GET['U_name']);

    include "NavBar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table>
    <tr>
        <th>Store Name</th>
        <th>Branch Name</th>
        <th>Store Location</th>
        <th>Store Type</th>
    </tr>
    <tr>
        <td><a href="Show Store.php?id=<?php echo $products['storeName'] ?>"><?php echo $products['storeName'] ?></a></td>
        <td><?php echo $products['BranchName'] ?></td>
        <td><?php echo $products['StoreLocation'] ?></td>
        <td><?php echo $products['StoreType'] ?></td>
        
    </tr>

</table>
</body>
</html>