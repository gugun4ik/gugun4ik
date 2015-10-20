<?php

class Controller {
	
	public $model;
	public $view;
	protected $connect;
	protected $mysqli;
	
	function __construct()
	{
		$this->view = new View();
		$this->connect = new Mysqli ('localhost', 'root', '1', 'command');
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
