<?php

class TasksController extends BaseController {
	protected $layout = "layouts.master";

	public function getTaskboard() {
		$this->layout->content = View::make('users.register');
	} 

	public function showTaskboard() {
		$categories = Category::lists('name', 'id');
		$this->layout->content = View::make('users.taskboard', ['categories' => $categories]);
	}

	public function addtask(){
		$task = new Task;
		$tas->title = Input::get('title');
		$task->description = Input::get('description');
		$task->email = Input::get('email');
		$task->password = Hash::make(Input::get('password'));
		$task->save();
	}
}
?>