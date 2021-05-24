<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.shopping' shared service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\PurchaseFlow.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor.php';
include_once $this->targetDirs[3].'\\app\\Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\DeliveryFeeFreeForCustomerRankByShippingPreprocessor.php';

$this->services['eccube.purchase.flow.shopping'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$instance->setFlowType('shopping');
$instance->setItemValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.item_validators']) ? $this->services['eccube.purchase.flow.shopping.item_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_ItemValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_validators']) ? $this->services['eccube.purchase.flow.shopping.holder_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderPreprocessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_preprocessors']) ? $this->services['eccube.purchase.flow.shopping.holder_preprocessors'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderPreprocessorsService.php')) && false ?: '_'});
$instance->setDiscountProcessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.discount_processors']) ? $this->services['eccube.purchase.flow.shopping.discount_processors'] : $this->load('getEccube_Purchase_Flow_Shopping_DiscountProcessorsService.php')) && false ?: '_'});
$instance->setItemHolderPostValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_post_validators']) ? $this->services['eccube.purchase.flow.shopping.holder_post_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderPostValidatorsService.php')) && false ?: '_'});
$instance->setPurchaseProcessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.purchase']) ? $this->services['eccube.purchase.flow.shopping.purchase'] : $this->load('getEccube_Purchase_Flow_Shopping_PurchaseService.php')) && false ?: '_'});
$instance->addItemValidator(${($_ = isset($this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\PriceChangeProcessor']) ? $this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\PriceChangeProcessor'] : $this->load('getPriceChangeProcessorService.php')) && false ?: '_'});
$instance->addItemHolderPreprocessor(new \Plugin\CustomerRank\Service\PurchaseFlow\Processor\DeliveryFeeFreeForCustomerRankByShippingPreprocessor(${($_ = isset($this->services['Eccube\\Repository\\DeliveryFeeRepository']) ? $this->services['Eccube\\Repository\\DeliveryFeeRepository'] : $this->load('getDeliveryFeeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\CustomerRank\\Service\\CustomerRankService']) ? $this->services['Plugin\\CustomerRank\\Service\\CustomerRankService'] : $this->load('getCustomerRankServiceService.php')) && false ?: '_'}));
$instance->addItemHolderPostValidator(${($_ = isset($this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\CustomerRankPointProcessor']) ? $this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\CustomerRankPointProcessor'] : $this->load('getCustomerRankPointProcessorService.php')) && false ?: '_'});
$instance->addDiscountProcessor(${($_ = isset($this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\CustomerRankDiscountProcessor']) ? $this->services['Plugin\\CustomerRank\\Service\\PurchaseFlow\\Processor\\CustomerRankDiscountProcessor'] : $this->load('getCustomerRankDiscountProcessorService.php')) && false ?: '_'});

return $instance;
