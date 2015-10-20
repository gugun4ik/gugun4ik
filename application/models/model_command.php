<?php

class Model_Command extends Model
{
	protected $connect;
	protected $mysqli;
	
	function __construct()
	{
		$this->connect = new Mysqli ('localhost', 'root', '1', 'command');
	}
	
	public function selectCommand()
	{
		try{

			$data = $this->connect->query("SELECT * FROM command");
			$result = [];
			$i = 0;
			$numrows = mysqli_num_rows($data);
			while($i<=$numrows){
				$result[]= mysqli_fetch_assoc($data);
				$i++;
			}
			
			
				//if ($result && mysqli_num_rows($result)) {
					//$numrows = mysqli_num_rows($result);
					//$rowcount = 1;
				//print "There are $numrows people in our command:<br /><br />";
			
				//while ($row = mysqli_fetch_assoc($result)) {		
					//while(list($key, $value) = each($row)) {
						//print "<B>$key</B>: $value<br />";
					//}
			
					//print "<br />";
					//++$rowcount;
				//}
			//}
		} catch(Exeption $ex) {
			echo $ex->getMessage();
		}
		return $result;
	}
}

