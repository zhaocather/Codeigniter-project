<div class="blog_content">

<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Content</th>
		<th>Created</th>
		<th>Modified</th>

	</tr>

<?php 
foreach($blog as $theBlog) :
		echo "<tr>";
		echo "<td> $theBlog['id'] </td>";
		echo "<td> $theBlog['title'] </td>";
		echo "<td> $theBlog['body'] </td>";
		echo "<td> $theBlog['created'] </td>";
		echo "<td> $theBlog['modified'] </td>";
		echo "</tr>";
endforeach;
?>

</table>

</div>