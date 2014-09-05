{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
	<div class="row">
    <div class="center-block" style="width:240px;">
    
    	<div class="form-group">
    		<h2 class="form-signin-heading">Please Login</h2>
 			<div class="form-group">
    		{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
    		</div>
    		<div class="form-group">
    		{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
    		</div>
    		<div class="form-group">
    		<A HREF="../users/register">Click here if you don't have an account yet.</A>
    		</div>
    		{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary'))}}
    		
    	</div>
	</div>
</div>
{{ Form::close() }}