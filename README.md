Laravel Nullable
=================
Easily set model columns as nullable - to send null on insert update when empty. For use when using foreign key, nullable, columns.


Quick Installation
------------------
You can install the package most easily through composer

#### Laravel 5.1.x
```
composer require arkitecht/laravel-nullable
```

Using it in your model
------------------
To have the creator and updater automagically updated when a model is created and updated, just use the Attributions trait in your model.

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