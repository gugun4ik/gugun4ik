<h1>Комманда разработчиков</h1>
<p>
<?php

foreach ($data as $k){
	while(list($key, $k) = each($data)) {
	echo $k['fname'].' '.$k['sname'].' '.$k['skill'].'<br/>';
	}
}

?>
</p>

