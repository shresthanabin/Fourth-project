<?php require_once 'connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'carousel.php'; ?>

<div class="container py-3">
   <h2 class="py-2"><b>Photographic List</b></h2>
   <?php 
      $stmt= "SELECT * FROM product WHERE feature =5";
      $result =$db->query($stmt);
    ?>
   <div class="row">
      <?php while ($row = mysqli_fetch_assoc($result)) {?>
   
      <div class="col-md-4">
         <h4><?php echo $row['names']; ?></h4>
            <a href="#" class="top-part"><?php echo "<img src='admin/image/product/".$row['images']."' >"; ?></a>
            <div class="row pt-3">
            <div class="col-md-5">
               <p class="font-weight-bold">Price: $<?php echo $row["price"]; ?></p>

            </div>
            <div class="col-md-7">
               <p class="font-weight-bold">Auction Date: <?php echo $row["auctiondate"]; ?></p>
            </div>
         </div>
         <p style="height: 50px"><?php echo substr($row["description"],0,80).' . . . . .'; ?></p>
         <div class="text-center">
               <button class="btn btn-sm btn-success mb-3" type="button" onclick="detailsmodal(<?= $row['id'];?>)">More Details</button>
            </div> 
         </div>
      <?php } ?>
   </div>
</div>
<?php require 'biding.php'; ?>
<?php require 'footer.php'; ?>