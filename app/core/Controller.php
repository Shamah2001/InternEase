<?php 

class Controller
{

	public function view($dname, $fname,$data = array())
	{
		extract($data);
		$foldername = "../views/".$dname."/";
		if (file_exists($foldername)) {
			$filename = $foldername.$fname.".php";
			if(file_exists($filename))
			{
				require $filename;
			}else{

			$filename = "../views/404.view.php";
			require $filename;
			}
		}else{
			$filename = "../views/404.view.php";
			require $filename;
		}
		
	}
}