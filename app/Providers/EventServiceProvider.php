<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.应用中事件监听器的映射。
     *
     * @var array
     */
    protected $listen = [
        \App\Events\ExampleEvent::class => [
            \App\Listeners\ExampleListener::class,
        ],
        'Dingo\Api\Event\ResponseWasMorphed' => [
            'App\Listeners\AddPaginationLinksToResponse'
        ],
    ];
//需要注册的订阅者类。
    public function shouldDiscoverEvents()
    {
        return true;
    }

    protected $subscribe = [

    ];
}
