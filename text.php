<form method="POST">
<input type="text" name="text"></input>
<br/>
<input type="submit" value="Submit"></input>
</form>
<?php
$text = $_POST["text"];
echo "<br/>";
echo $text;
?>
