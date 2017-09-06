<?php
$mysqli = new mysqli('localhost','root','root','iii');





$rpp = 10;
$page = 1;
if(isset($_GET['page'])) $page = $_GET['page'];

$start = ($page-1)*$rpp;

$prev = $page==1?1:$page-1;

$sql = "SELECT * FROM food limit 20, 10";
$result = $mysqli->query($sql);
?>

<a href="?page=<?php echo $prev; ?>">Prev</a> | <a href="">Next</a>

<table width="100%" border="1">
    <tr>
        <th>縣市</th>
        <th>城鎮</th>
        <th>名稱</th>
        <th>緯度</th>
        <th>經度</th>
    </tr>
    <?php
    while ($data = $result->fetch_object()){
        echo '<tr>';
        echo "<td>{$data->city}</td>";
        echo "<td>{$data->town}</td>";
        echo "<td>{$data->name}</td>";
        echo "<td>{$data->lat}</td>";
        echo "<td>{$data->lng}</td>";
        echo '</tr>';
    }
    ?>
</table>