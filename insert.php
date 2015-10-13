<html>
<body>


<?php
include 'config/db.inc';

$con = mysql_connect("$DB_HOST","$DB_USER","$DB_PASS");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$DB_NAME", $con);

$sql="INSERT INTO nametable (demostr)
VALUES
('$_POST[demostr]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Record added";

mysql_close($con)
?>
</body>
</html>
