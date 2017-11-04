<?php
	function input_fields($type,$label_array,$width)
	{
		

			foreach ($label_array as $label=> $addon)
			{
			echo "
			<div class='form-group'>
				<div class='col-$width'>
					<label for='$label'>".ucfirst($label)."</label>
					<div class='input-group'>
	                      <div class='input-group-addon'><i class='fa fa-$addon fa-fw' aria-hidden='true'></i></div>
						<input type='$type' class='form-control' name='$label' id='$label'>
					</div>
				</div>
			</div>
			";
	}
	}
	function get_theme()
	{
		$theme_array = array('yeti','united','solar','darkly','litera','simplex','materia','cosmo','cyborg','lumen','pulse','sketchy','spacelab','superhero','slate','minty','cerulean','flatly','lux','journal');
		$index = rand(0,sizeof($theme_array));
		return $theme_array[$index];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/<?=get_theme();?>/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include_once "header.php";?>
	<form action="submit.php" method="post">
	<?php 
		// label_array = array('field-name1'=>'add-on font-awsome icon name1','field-name2'=>'add-on font-awsome icon name2',','field-name3'=>'add-on font-awsome icon name3','etc...');
		//input_fields('type of field','label_array','col-* width of field');
	   $labels = array('name'=>'user','email'=>'envelope','phone'=>'phone','password'=>'lock','username'=>'user-plus');
		input_fields('text',$labels,6);
			?>
			<div class='form-group'>
				<div class='col-2'>
			<button class="btn btn-success"> submit</button>
		</div>
	</div>
		</form>
</body>
</html>