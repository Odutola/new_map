<?php


include 'address.php';


if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $address1 = $_POST['address1'];
    $unit = $_POST['unit'];
    $add = new Address();
  
   echo $add->getDistance($address, $address1, $unit);

    ?>
    <iframe width="40%" height="500" src="https:maps.google.com?q=<?php echo $address; ?>&output=embed"></iframe> 
    <iframe width="40%" height="500" src="https:maps.google.com?q=<?php echo $address1; ?>&output=embed"></iframe> 
<?php
}
?>

<form method ="POST">
<p>
    <label>From</label>
    <input type="text" name="address">
</p>
<p>
    <label>To</label>
    <input type="text" name="address1">
</p>
<p>
    <label>Unit</label>
    <input type="text" name="unit">
</p>
<input type="submit" name="submit">
</form> 
