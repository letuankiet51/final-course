<div class="col-lg-3">
  <h1 class="my-4">Shop Name</h1>
  <div class="list-group">
  	<?php
        $sql = "select * from catalogs";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>            
    		<a href="catalog.php?id=<?php echo $row["id"];?>" class="list-group-item"><?php echo $row["name"]; ?></a>
          <?php   }
        }
      ?>
  </div>
</div>