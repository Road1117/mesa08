<?php



?>
<script>
    function chform() {
        return true;
    }
</script>
<form action="brad20.php" method="get">
    account:<br><input name="account"><br>
    password:<br><input type="password" name="passwd"><br>
    <input type="radio" name="gender" value="M" checked>Male<br>
    <input type="radio" name="gender" value="F">Female<br>
    <input type="checkbox" name="like[]" value="1">1
    <input type="checkbox" name="like[]" value="2">2
    <input type="checkbox" name="like[]" value="3">3<br>
    <input type="checkbox" name="like[]" value="4">4
    <input type="checkbox" name="like[]" value="5">5
    <input type="checkbox" name="like[]" value="6">6<br>
    <select name="area">
        <option value="e">東</option>
        <option value="s">南</option>
        <option value="w">西</option>
        <option value="n">北</option>
    </select><br>
    <textarea name="memo" rows="10" cols="40"></textarea><br>
    <input type="file" name="upload"/><br>
    <input type="submit" name="what" value="ok1">
    <input type="submit" name="what" value="ok2">
</form>
<hr>
<form action="brad21.php" onsubmit="return chform();" method="get">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" value="ok">
</form>
<hr>
<form action="brad22.php" onsubmit="return chform();" method="get">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" value="ok">
</form>