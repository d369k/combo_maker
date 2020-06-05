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
				<div class="row upload_box">
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Delimiter</span>
							</div>
							<input type="text" class="form-control" placeholder=":">
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mg">
						<button type="button" class="btn btn-warning" style="width:100%;">Upload</button>
					</div>
				</div>
			</form>
			<div class="row show_box">
				<div class="col-lg-6 col-sm-12 mg">
					<div class="form-group">
						<label for="comment">User List:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 mg">
					<div class="form-group">
						<label for="comment">Password List:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
			</div>
			<div class="row mg">
				<div class="col-lg-6 col-md-6 col-sm-12 mg">
					<button type="button" class="btn btn-success" style="width:100%;">Create Combo</button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mg">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Result</span>
						</div>
						<input type="text" class="form-control" disabled>
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
	</body>
</html>