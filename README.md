# laravel-sleep
You can sleep users easily.

### Installation

```
composer require ismailocal/sleep
```

### Configuration

``` sh
php artisan vendor:publish --provider="Ismailocal\Sleep\SleepServiceProvider"
```
then open "config/sleep.php" and replace "table" name with your sleepable table name.

### Sleepable Trait
``` php
use Ismailocal\Sleep\Traits\Sleepable;

class User extends Authenticatable{

  use Sleepable;

```

### Migration

``` php
php artisan migrate
```

### Middleware
``` php
Route::middleware(['check.sleep'])->group(function () {
```
Throwing "UserSleepingException" when user sleeping!

### Usage

``` php
$user->sleep(1, 'day');
or
$user->sleep(2, 'hours');

$user->save();
```

Check
```
$user->isSleep(); // return boolean
```
