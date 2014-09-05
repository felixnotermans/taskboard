{{ Form::open(array('route'=>'users.taskboard', 'class'=>'form-signup')) }}
<form class="form-horizontal">
<fieldset>
		<!-- Form Name -->
		<legend>Add a new task </legend>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label" for="title">Task title:</label>
			<div class="controls">
				<input id="title" name="title" type="text" placeholder="Your title" class="input-xlarge" required="">

			</div>
		</div>

		<!-- Textarea -->
		<div class="control-group">
			<label class="control-label" for="description">Task description:</label>
			<div class="controls">                     
				<textarea id="description" name="description"></textarea>
			</div>
		</div>

		<!-- Select Basic -->
		<div class="control-group">
			<label class="control-label" for="selectbasic">Select category</label>
			<div class="controls">
				{{Form::select('categories', $categories, Input::old('categories'))}}
			</div>
		</div>

		<!-- Due Date Picker -->
		<div id="datetimepicker" class="input-append date">
		<label class="control-label" for="Due date:">Due date:</label>
			<input type="text"></input>
			<span class="add-on">
				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
			</span>
		</div>

		
		<!-- Completed at Date Picker -->
		<div id="datetimepicker2" class="input-append date">
		<label class="control-label" for="Due date:">Completed at:</label>
			<input type="text"></input>
			<span class="add-on">
				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
			</span>
		</div>

		<!-- Button -->
		<div class="control-group">
			<label class="control-label" for="addTask"></label>
			<div class="controls">
				<button id="addTask" name="addTask" class="btn btn-primary">Add</button>
			</div>
		</div>
</fieldset>
</form>
{{Form::close()}}