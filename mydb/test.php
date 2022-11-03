<style>
    table {
        border-collapse: collapse;
    }
    th {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        background-color: #CCCCCC;
    }
    td {
        border: 1px solid black;
        text-align: center;
    }
    tbody>tr:nth-child(odd) {
        background-color: #CCCCFF;
    }
    tbody>tr:nth-child(even) {
        background-color: #CCCCFF;
    }
</style>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Имя</th>
        <th>Логин</th>
        <th>Возраст</th>
        <th>Id группы</th>
    </tr>

</thead>
<tbody>
<?php
	$host = 'my_db'; 
	$user = 'root';      
	$pass = '1234';          
	$name = 'students';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
	
	
if (!empty($_POST)) {
    $name = $_POST['name'];
    $login = $_POST['login'];
    $age = $_POST['age'];
    $id_group = $_POST['id_group'];
    $query = sprintf("INSERT INTO `students` (`Name`,`Login`,`Age`, `ID_Group`)VALUES ('%s','%s',%d,%d)", $name,$login,$age,$id_group);
    mysqli_query($link, $query) or die(mysqli_error($link));
}
$query = 'SELECT s. `ID`,s.`Name`,s.`Login`,s.`Age`,g.`Name` AS `Group` FROM `students` AS s JOIN `groups` AS g ON g.ID = s.ID_Group;';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Login'].'</td>';
        echo '<td>'.$row['Age'].'</td>';
        echo '<td>'.$row['Group'].'</td>';
        

echo '</tr>';
    }
?>
</tbody>
</table>
<br>
<form action="test.php" method="POST">
    <input type="text" name="name" placeholder="Имя"><br>
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="text" name="age" placeholder="Возраст"><br>
    <input type="text" name="id_group" placeholder="№ группы"><br>
    
    <select name="group">
        <?php
            $query = 'SELECT `ID`,`Name` FROM `groups`';
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option>'.$row['Name'].'</option>';
            }
        ?>
    </select><br>
    <input type="submit">
</form>