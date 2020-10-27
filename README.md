Laravel Nullable
=================
Easily set model columns as nullable - to send null on insert and update when empty. For use when using foreign key, nullable, columns.


Quick Installation
------------------
You can install the package most easily through composer

```
composer require arkitecht/laravel-nullable
```

Using it in your model
------------------
Use the `$nullable` variable to define the nullable columns in your model. These will send null to the database when empty, rather than an empty string. 

```php
<?php

namespace App;

use Arkitecht\Nullable\Traits\Nullable;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use Nullable;
    protected $nullable = ['null_column_one','null_column_two'...];
}
?>
```
