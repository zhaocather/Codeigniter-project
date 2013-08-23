<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>City</th>
    <th>Email</th>
    <th>Date of birth</th>
</thead>

<tbody>

<?php foreach ($details as $row): 

    echo "<tr>";
    echo "<td>". $row['ID'] ."</td>";
    echo "<td>". $row['Name'] ."</td>";
    echo "<td>". $row['Surname'] ."</td>";
    echo "<td>". $row['City'] ."</td>";
    echo "<td>". $row['Email'] ."</td>";
    echo "<td>". $row['Dob'] ."</td>";
	echo "</tr>";

endforeach ?>
</tbody>