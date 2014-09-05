<html lang="en">
  <head>
  </head>
  <body>

      <h3 class="span12" style="margin-left: 500px;">My Favorite Books</h3>

      <div style="margin: 10px auto; padding-left: 5px;">
      <table id="example" class="table span12 table-bordered table-hover">
		  <thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Author</th>
				<th>Purhcase</th>
			</tr>
		  </thead>
		  <tbody>
			   @foreach($tasks as $row) 
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['author']; ?></td>
					<td><?php echo $row['purpose']; ?></td>
				</tr>
				@endforeach   
		  </tbody>
        </table>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').dataTable();
			} );
	</script>
        </div>
   </body>
</html>



