###checkConnectDB ?
    DB::connection()->getPdo();
###install debugbar
    composer require barryvdh/laravel-debugbar --dev
     - add the ServiceProvider to the providers array in config/app.php
        - Barryvdh\Debugbar\ServiceProvider::class,
        - alias:
            'Debugbar' => Barryvdh\Debugbar\Facade::class,
###continue ...