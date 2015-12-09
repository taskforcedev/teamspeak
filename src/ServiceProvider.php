<?php namespace Taskforcedev\Teamspeak;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->config();
        $this->views();
        $this->routes();
    }

    private function config()
    {
        $this->publishes([
            __DIR__.'/config/taskforce-teamspeak.php' => config_path('taskforce-teamspeak.php'),
        ], 'taskforce-teamspeak');

        $this->mergeConfigFrom(
            __DIR__.'/config/taskforce-teamspeak.php',
            'taskforce-teamspeak'
        );

        // Merge overridden Config
        $published = __DIR__.'/../../../../config/taskforce-blog.php';
        if (file_exists($published)) {
            $this->mergeConfigFrom(
                $published,
                'taskforce-teamspeak'
            );
        }
    }

    private function views()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'taskforce-teamspeak');
    }

    private function routes()
    {
        require __DIR__ . '/Http/routes.php';
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        return [];
    }
}
