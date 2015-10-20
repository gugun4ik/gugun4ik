<?php

class Controller_Command extends Controller
{
function __construct()
	{
		$this->model = new Model_Command();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->selectCommand();		
		$this->view->generate('command_view.php', 'template_view.php', $data);
	}
}
