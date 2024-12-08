<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lab 5a Q1</title>
  <style>
    table {
      border: 1px solid rgb(150, 150, 150);
      border-collapse: collapse;
      width: 80%;
      max-width: 600px;
      margin: 0 auto;
      margin-top: 80px;
    }
  </style>
</head>

<body>
  <?php
  $name = "TEOH WEI JUN";
  $matricNumber = "AI220379";
  $course = "Bachelor of Computer Science (Software Engineering) with Honours";
  $yearOfStudy = "Year 3";
  $address = "No. 12, Jalan Mesra 1, Taman Mesra, 12300 Butterworth, Pulau Pinang";
  ?>
  <table border="1">
    <tr>
      <td>Name</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo $matricNumber; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo $course; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $address; ?></td>
    </tr>
  </table>
</body>

</html>
