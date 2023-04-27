
<?php
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $keyword = test_input($_POST["keyword"]);

  // Search for products that match the keyword
  $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
      echo "<li>" . $row["name"] . " - " . $row["price"] . "</li>";
    }
    echo "</ul>";
  } else {
    echo "No products found.";
  }
}

$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Search Products</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>


    <form method="post" onsubmit="searchProducts(event)">
      <div align="center">
        <br>
      <label for="keyword">Keyword:</label>
      <input type="text" id="keyword" name="keyword">
      <input type="submit" value="Search">
      </div>
    </form>

    <div id="searchResults"></div>

    <script>
      function searchProducts(event) {
        event.preventDefault();
        var keyword = document.getElementById("keyword").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("searchResults").innerHTML = this.responseText;
          }
        };
        xhttp.open("POST", "search_product.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("keyword=" + keyword);
      }
    </script>
  </div>
</body>
</html>
