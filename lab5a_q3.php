<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
function multiplication($multiplier)
{
  $results = [];
  for ($i = 1; $i <= 12; $i++) {
    $results[] = $i * $multiplier;
  }
  return $results;
}

$multiplier = 3;
$results = multiplication($multiplier);
echo "<table border='1'>";
echo "
  <tr>
    <th>No</th>
    <th>Multiplier</th>
    <th>Answer</th>
  </tr>";
$x = 1;
foreach ($results as $result) {
  echo "<tr>";
  echo "<td>" . $x++ . "</td>"; // 
  echo "<td>" . $multiplier . "</td>";
  echo "<td>" . $result . "</td>";
  echo "</tr>";
}
echo "</table>";
?>

</body>

</html>