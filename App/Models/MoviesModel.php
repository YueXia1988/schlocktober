<?php

namespace App\Models;

use PDO;
use finfo;
use Intervention\Image\ImageManagerStatic as Image;

Class MoviesModel extends DatabaseModel
{
	protected static $tablename = 'movies';
	protected static $columns = ['id','title','year','description','poster'];

	public function savePoster($filename){
		//find the file mime type
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		$mimetype = $finfo->file($filename);
		
		//create all possioblie extensions
		$extension=[
				'image/jpg'=>'.jpg',
				'image/jpeg'=>'.jpg',
				'image/png'=>'.png',
				'image/gif'=>'.gif'
		];


		//if mime type is present ,then select appropriate extension for the file
		if(isset($extension[$mimetype])){
			$extension=$extension[$mimetype];
		}else{
			$extension='.jpg';
		}
		//create filename
		$newFilename = uniqid().$extension;
		
		//to store the image file in database, give it to the object
		$this->poster= $newFilename;

		//create new folder to store newFilename inorder to display the image
		$subfolder ='images/thumbnails';

		if(! is_dir($folder)){
			mkdir($subfolder,0777,true);
		}

			$destination = $folder."/".$newFilename;
			move_uploaded_file($filename, $destination);

			$img = Image::make($destination);
			$img->fit(50,50);
			$img->save($subfolder,$newFilename);








		
	}


}
