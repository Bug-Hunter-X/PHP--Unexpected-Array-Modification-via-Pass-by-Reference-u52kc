```php
<?php
function increment_array(array $arr): array {
  $incremented = [];
  foreach ($arr as $value) {
    $incremented[] = $value + 1;
  }
  return $incremented;
}

$numbers = [1, 2, 3];
$incrementedNumbers = increment_array($numbers);
print_r($numbers); // Original array remains unchanged
print_r($incrementedNumbers); // New array with incremented values
?>
```