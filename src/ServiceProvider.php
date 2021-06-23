<?php

namespace Vannut\WarmUtility;

use Statamic\Facades\Utility;
use Vannut\WarmUtility\WarmController;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    
    protected $viewNamespace = 'vannut';

    public function boot()
    {
        parent::boot();
        
        Utility::make('warm-utility')
            ->action([WarmController::class, 'index'])
            // ->view('vannut::warm-utility')
            ->title('Warm Cache')
            ->icon('loading-bar')
            ->navTitle('Warm Cache')
            ->description('Warm your cache with the click of a button')
            // ->docsUrl('https://yoursite.com/docs/french-fries')
            ->routes(function ($router) {
                $router->get('/warm-it', [WarmController::class, 'warm'])->name('warm');
            })
            ->register();
    }

    
}
