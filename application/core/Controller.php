<?php

class Controller {
	
	public $model;
	public $view;
<<<<<<< HEAD
	protected $connect;
	protected $mysqli;
=======
>>>>>>> b84f6e15ee70604f245302eb71083521dbf8bc67
	
	function __construct()
	{
		$this->view = new View();
<<<<<<< HEAD
		$this->connect = new Mysqli ('localhost', 'root', '1', 'command');
=======
>>>>>>> b84f6e15ee70604f245302eb71083521dbf8bc67
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
