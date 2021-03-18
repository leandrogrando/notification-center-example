# Central de notificação

Como instalar

```
composer install leandrogrando/notification-center
```

No seu model de usuario, insira

```
<?php

namespace App\Models;
use LeandroGrando\NotificationCenter\Traits\HasNotificationCenter;

class User extends Authenticatable
{
    use HasNotificationCenter;
```
