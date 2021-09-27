<?php
$u = "";
$p = "";
if (isset($_COOKIE['username'])) {
  $u = $_COOKIE['username'];
}
if (isset($_COOKIE['password'])) {
  $p = $_COOKIE['password'];
}
?>

<form action="server.php" method="post">
  <table>
    <tr>
      <th>username</th>
      <th>
        <input type="text" name="uname" value="<?= $u ?>" required />
      </th>
    </tr>
    <tr>
      <th>password</th>
      <th>
        <input type="password" name="upwd" value="<?= $p ?>" required />
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="checkbox" name="chk" value="yes" />Remember now
        <input type="submit" name="submit" />
      </th>
    </tr>
  </table>
</form>