<?php
class HomeController extends BaseController {
	protected $layout = "layouts.master";

    public function showWelcome()
    {
    	$tasks = Task::all();
        $this->layout->content = View::make('home', ['tasks' => $tasks]);
    }

}