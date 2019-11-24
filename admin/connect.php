<?php
$connection = mysqli_connect('localhost' , 'student' ,'' ,'software3');

//update admin table
if(isset($_POST['firstname'])){
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $id = $_POST['id'];

  //  query to update data 
   
  $result  = mysqli_query($connection , "UPDATE adminregister SET firstname='$firstname' , surname='$surname' , email = '$email' , address='$address' , phone='$phone' WHERE id='$id'");

}

//update user table
if(isset($_POST['firstname'])){
  $title = $_POST['title'];
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $account = $_POST['account'];
  $code = $_POST['code'];
  $id = $_POST['id'];

  //  query to update data 
   
  $result  = mysqli_query($connection , "UPDATE user SET title='$title' , firstname='$firstname' , surname='$surname' , email = '$email' , address='$address' , phone='$phone' , account='$account' , code='$code' WHERE id='$id'");

}

if (isset($_POST['name'])) {
  $lotnumber = $_POST['lotnumber'];
  $name = $_POST['name'];
  $seller = $_POST['seller'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $productiondate = $_POST['productiondate'];
  $auctiondate = $_POST['auctiondate'];
  $category = $_POST['category'];
  $types = $_POST['types'];
  $drawing = $_POST['drawing'];
  $item = $_POST['item'];
  $dimension = $_POST['dimension'];
  $material = $_POST['material'];
  $weight = $_POST['weight'];
  $used = $_POST['used'];
  $imagetype = $_POST['imagetype'];
  $feature = $_POST['feature'];
  $location = $_POST['location'];


  //query for update product data
  $result = mysqli_query($connection , "UPDATE product SET lotnumber='$lotnumber' , name='$name' , seller='$seller' , description='$description' , price='$price' , productiondate='$productiondate' , auctiondate='$auctiondate' , categoryId='$categoryId' , types='$types' , drawing='$drawing' , item='$item' , dimension='$dimension' , material='$material' , weight='$weight' , used='$used' , imagetype='$imagetype' , feature='$feature', location='$location' WHERE id='$id'");
}
?>