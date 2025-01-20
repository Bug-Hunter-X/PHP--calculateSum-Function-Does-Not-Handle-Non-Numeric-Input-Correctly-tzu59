```php
<?php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle error: you can throw exception, return error code or log an error
      throw new InvalidArgumentException('Input array contains non-numeric value.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = [1, 2, 'a', 4, 5];

// This line will throw an exception
try{
    echo calculateSum($numbers); 
} catch (InvalidArgumentException $e){
    echo "Error: " . $e->getMessage();
}
?>
```