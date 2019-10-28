<?php

namespace Will\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class WillRouteServiceProvider
 * @package Will\Providers
 */
class WillRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('payment/Will/style',            'Will\Controllers\WillResponseController@getStyle');
        $router->post('payment/Will/response',        'Will\Controllers\WillResponseController@handleResponse');
        $router->get('payment/Will/checkout_failure', 'Will\Controllers\WillResponseController@checkoutFailure');
        $router->get('payment/Will/checkout_success', 'Will\Controllers\WillResponseController@checkoutSuccess');
    }
}
