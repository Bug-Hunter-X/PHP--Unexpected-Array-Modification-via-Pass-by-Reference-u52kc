```php
<?php
function increment_array(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array($numbers);
print_r($numbers);
?>
```