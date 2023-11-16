<?php 


Trait Controller
{

	public function view($dname, $fname)
	{

		$foldername = "../app/views/".$dname."/";
		if (file_exists($foldername)) {
			$filename = $foldername.$fname.".php";
			if(file_exists($filename))
			{
				require $filename;
			}else{

			$filename = "../app/views/404.view.php";
			require $filename;
			}
		}else{
			$filename = "../app/views/404.view.php";
			require $filename;
		}
		
	}
}