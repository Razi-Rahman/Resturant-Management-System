<?php 

require_once ('Model/Operation.php');

function fetchAllProducts(){
	return ShowAllProducts();

}
function fetchProducts($storeName){
	return ShowProducts($storeName);

}