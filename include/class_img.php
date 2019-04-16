<?php 

	class Img {
		public function upload_img($image_file){
			$target_dir = "img/uploads/";
			$target_file = $target_dir . basename($image_file["name"]);
			$uploadOk = 1;
			$err;

			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			if(isset($_POST["submit"])) {
				$check = getimagesize($image_file["tmp_name"]);
				if($check !==)
			}
		}
	}
	
 ?>