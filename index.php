<?php
$dbh = new PDO('mysql:host=localhost;dbname=test1', 'root', '1234567');

/*$sql = 'SELECT * 
    FROM Main';
$sth = $dbh->prepare($sql);
$sth->execute();
$red = $sth->fetchAll(PDO::FETCH_ASSOC);
var_dump ($red);*/ 


if (isset($_POST['name']) && isset($_POST['age'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $query = $dbh->prepare("INSERT INTO test (name, age) values (:name, :age)");
    $query->bindValue(':name', $name);
    $query->bindValue(':age', $age);
    $result = $query->execute();
    if ($result) {
	echo "Ok";
    } else {
	echo "bad";
    }
}
?>

<form method = "post">
Имя<br>
<input name = "name" type = "text"><br>
Возраст<br>
<input name = "age" type = "number"><br>
<input type = "submit">
</form>

git 
