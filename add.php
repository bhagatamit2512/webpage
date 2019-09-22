<?php
	session_start();
	include 'back.php';

	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    	header('location: g.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$name = mysqls_real_escape_string( $_POST['categoryname']);
		$sql = mysql_query("INSERT INTO category (name) VALUES ('$name')");

		if($sql){
			$smsg = "Category Added";
		}else{
			$fmsg = "Failed Add Category";
		}
	}
?>



	<div class="content">
		<div class="container">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post">
			  <div class="form-group">
			    <label for="Productname">Category Name</label>
			    <input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

		</div>
	</div>
	<style>
		.content{
			margin:120px;
			margin-left:500px;
			background: #f7eae9;
			box-shadow: 0 3px 5px rgba(0,0,0,0.6);
			height: 500px;
			width: 400px;
			box-sizing: border-box;
			 border-radius: 12px;
			 transition: width 2s,height 2s}

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
								input[type="radio"]
								{font-size: 10px;
									 margin-left: 70px;
									 margin-top: 30px;
								 background: red;}
									 select{ margin:18px;
									 margin-left: 70px;
									 width: 150px;
									 height: 30px;
										background: #e1f5f3;}
									.o{color:green;
										font-size: 19px;
										font-family:comic sans ms;}
										.box:hover{width:403px;height: 503px; }




	</style>
