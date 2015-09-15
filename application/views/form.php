<?php 

	echo $title;




?>
<br>
<br>
<form action="http://localhost/teampixoloBackend/index.php/projectuser/test" method="GET">
	name: <input name="name" type="text"><br><br>
	first name: <input name="lastname" type="text"><br><br>
text: <textarea name="text"></textarea><br><br>
	<select name="status">
		<option>Pixolo</option><br>
		<option>Pixolo</option><br>
	</select>
	<br><br>
	date: <input type="date">
	<br><br>
	select image : <input type="file" name="image"><br>

<br>
	<input type="submit" value="INSERT"><br>

</form>
