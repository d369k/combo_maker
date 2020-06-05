<!DOCTYPE html>
<html lang="en" type="text/html">
	<head>
		<meta charset="UTF-8"/>
		<title> Combo Maker v1.0 </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<style type="text/css">
			form{
				width: 100%;
			}
			.upload_box{
				margin-top: 10px;
				border-bottom: 2px dashed #ccc;
			}
			.mg{
				margin-top: 5px;
			}
			textarea{
				max-height: 500px;
				min-height: 500px;
			}
			.show_box{
				border-bottom: 2px dashed #ccc;
			}
		</style>
		</div>
	</head>
	<body>
		<div class="container">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row upload_box mg">
					<div class="col-sm-12 mg">
						<?php
							if(!empty($_POST)){
								if(!empty($_FILES['username']) and !empty($_FILES['password'])){
									$username_file_type = pathinfo($_FILES['username']['name'],PATHINFO_EXTENSION);
									$password_file_type = pathinfo($_FILES['password']['name'],PATHINFO_EXTENSION);
									if($username_file_type == "txt" and $password_file_type == "txt"){
										$username_file_tmp = $_FILES['username']['tmp_name'];
										$password_file_tmp = $_FILES['password']['tmp_name'];
										move_uploaded_file($username_file_tmp,"username.txt");
										move_uploaded_file($password_file_tmp,"password.txt");
										if(!empty($_POST['delimiter'])){
											$delimiter = $_POST['delimiter'];
											file_put_contents("delimiter.txt",$delimiter);
										}else{
											file_put_contents("delimiter.txt",":");
										}
										echo("<div class='alert alert-success alert-dismissible'>
											<button type='button' class='close' data-dismiss='alert'>&times;</button>
											The files were successfully uploaded
										</div>");
									}else{
										echo("<div class='alert alert-danger alert-dismissible'>
											<button type='button' class='close' data-dismiss='alert'>&times;</button>
											Please upload the file with the .txt extension
										</div>");
									}
								}else{
									echo("<div class='alert alert-danger alert-dismissible'>
										<button type='button' class='close' data-dismiss='alert'>&times;</button>
										Please upload the username and password file
									</div>");
								}
							}
						?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="username">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="password">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Delimiter</span>
							</div>
							<input type="text" class="form-control" name="delimiter" placeholder=":">
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<button type="submit" class="btn btn-warning" style="width:100%;">Upload</button>
					</div>
				</div>
			</form>
			<div class="row show_box">
				<div class="col-lg-6 col-sm-12 mg">
					<div class="form-group">
						<label>User List:</label>
						<textarea class="form-control" rows="5">
							<?php
								if(is_file("username.txt")){
									echo file_get_contents("username.txt");
								}
							?>
						</textarea>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 mg">
					<div class="form-group">
						<label>Password List:</label>
						<textarea class="form-control" rows="5">
							<?php
								if(is_file("password.txt")){
									echo file_get_contents("password.txt");
								}
							?>
						</textarea>
					</div>
				</div>
			</div>
			<div class="row mg">
				<div class="col-lg-6 col-md-6 col-sm-12 mg">
					<button type="button" class="btn btn-success combo-create" style="width:100%;">Create Combo</button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mg">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Result</span>
						</div>
						<input type="text" class="form-control result-box" disabled>
					</div>
				</div>
			</div>
			<div class="col-sm-12 text-center">
				Create By <a href="https://www.instagram.com/dwni3l/">Daniel Malekzadeh</a>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".custom-file-input").on("change", function() {
					var fileName = $(this).val().split("\\").pop();
					$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
				$(".combo-create").on("click",function(){
					$(".result-box").val("create the combo list ...");
					$.ajax({
						url:"combo_maker.php",
						success:function(result){
							$(".result-box").val(result);
						}
					});
				});
			});
		</script>
	</body>
</html>