<?php // strict

namespace Will\Methods;

use Plenty\Modules\Account\Contact\Contracts\ContactRepositoryContract;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Plugin\ConfigRepository;

use Will\Methods\WillPaymentMethodBase;

/**
 * Class WillPaymentMethod
 * @package Will\Methods
 */
class WillPaymentMethodDD extends WillPaymentMethodBase
{
  var $type = 'DD';
}