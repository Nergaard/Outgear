<?php 
	
	
	class Jumbo {
		public function show_jumbo($img, $description){

			$img = $this->get_img_link_from_imgID($img);			
			echo '<section class = "span--full--width>';
			echo '<img src = "img/',$img[0],'"alt="">';
			echo '<h4>',$description, '</h4>';
			echo '</section>'
		}

		public function get_img_link_from_imgID($img) {
			global $pdo;
			$img = (Int)$img;
			$query = $pdo->prepare("SELECT img_link FROM img WHERE img_ID = ?");
			$query->bindValue(1, $img);
			$query->execute();
			
		return $query->fetch();
		}			
	}

 ?>