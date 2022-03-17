<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Landenoverzicht</h2>

<table>
 
<?php

$records = "";

foreach ($data['users'] as $country){
    echo "id" . $country->name;
    $records .= "<tr> 
    <th>"  . $record["id"] . "</th>
    <td>"  . $record["omschrijving"] . "</td>
    </td>
    </tr>";
}
// var_dump($data);

?>

</table>

</body>
</html>


