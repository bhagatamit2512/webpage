<?php
	session_start();
	include 'back.php';


	if(isset($_POST) & !empty($_POST)){
		$prodname = mysql_real_escape_string( $_POST['name']);
		$description = mysql_real_escape_string( $_POST['description']);
		$category = mysql_real_escape_string( $_POST['category']);
		$price = mysql_real_escape_string( $_POST['price']);


		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$type = $_FILES['image']['type'];
			$tmp_name = $_FILES['image']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					if(move_uploaded_file($tmp_name, $location.$name)){
						//$smsg = "Uploaded Successfully";
						$sql =mysql_query("INSERT INTO addp (name, description, catid, price, thumb)
            VALUES ('$prodname', '$description', '$category', '$price', '$location$name')");

						if($sql){
							//echo " Created";
							header('location: s.php');
						}else{
							$fmsg = "Failed to Create ";
						}
					}else{
						$fmsg = "Failed to Upload File";
					}
				}else{
					$fmsg = "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				$fmsg = "Please Select a File";
			}
		}else{

			$mug =mysql_query ("INSERT INTO addp (name, description, catid, price)
      VALUES ('$prodname', '$description', '$category', '$price')");

			if($mug){
				header('location: s.php');
			}else{
				$fmsg =  "Failed to Create ";
			}
		}
	}
?>
<?php
include 'nav.php';
include 'sidebar.php';
include 'rsidebar.php';
 ?>


	<div class="blog">

		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="name">Book Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder=" Name">
			  </div>
			  <div class="form-group">
			    <label for="description">Book Description</label>
			    <textarea class="form-control" name="description" rows="3"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="category">Book Category</label>
			    <select class="form-control" id="category" name="category">
				  <option value="">---SELECT CATEGORY---</option>
          <option value="">Enginnering</option>
          <option value="">Literature</option>
          <option value="">Non-fiction</option>
          <option value="">Poetry</option>
          <option value="">lifestyle</option>
				  <?php
					$cup =mysql_query("SELECT * FROM category");

					while ($r = mysqli_fetch_assoc($cup)) {
				?>
					<option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
				<?php } ?>
				</select>
			  </div>


			  <div class="form-group">
			    <label for="price">Book Price</label>
			    <input type="text" class="form-control" name="price" id="price" placeholder="Book Price">
			  </div>
			  <div class="form-group">
			    <label for="image">Book Image</label>
			    <input type="file" name="image" id="image">
			    <p class="help-block">Only jpg/png are allowed.</p>
			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>
			</form>


	</div>


<style>
.blog{
  margin:120px;
  margin-left:500px;
  background: #f7eae9;
  box-shadow: 0 3px 5px rgba(0,0,0,0.6);
  height: 500px;
  width: 400px;
  box-sizing: border-box;
   border-radius: 12px;
   transition: width 2s,height 2s}
}

button[type="submit"]{
  height: 30px;
  width: 150px;
  margin-left: 100px;
  color: white;
  cursor: pointer;
  background-color:red;

  border-radius: 4px;
  border: none;
}
button[type="submit"]:hover
{
  background:hotpink;
  border-radius:2px 10px 2px;
  transition-delay: 0.1s;
}
</style>
