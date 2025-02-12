<?php

namespace Schematic;

use Schematic\Configuration;
use Schematic\Api\AccesstokensApi;
use Schematic\Api\AccountsApi;
use Schematic\Api\BillingApi;
use Schematic\Api\CheckoutApi;
use Schematic\Api\CompaniesApi;
use Schematic\Api\ComponentsApi;
use Schematic\Api\EntitlementsApi;
use Schematic\Api\EventsApi;
use Schematic\Api\FeaturesApi;
use Schematic\Api\PlangroupsApi;
use Schematic\Api\PlansApi;
use Schematic\Api\WebhooksApi;

class Schematic
{
    public $AccesstokensApi;
    public $AccountsApi;
    public $BillingApi;
    public $CheckoutApi;
    public $CompaniesApi;
    public $ComponentsApi;
    public $EntitlementsApi;
    public $EventsApi;
    public $FeaturesApi;
    public $PlangroupsApi;
    public $PlansApi;
    public $WebhooksApi;

    /**
     * @param string $apiKey
     * @param array $options
     */
    public function __construct(string $apiKey, array $options = [])
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', $apiKey);

        if (isset($options['basePath'])) {
            $config->setHost($options['basePath']);
        }

        if (isset($options['environmentId'])) {
            $config->addDefaultHeader('X-Schematic-Environment-Id', $options['environmentId']);
        }

        if (isset($options['headers'])) {
            foreach ($options['headers'] as $key => $value) {
                $config->addDefaultHeader($key, $value);
            }
        }

        $httpClient = new \GuzzleHttp\Client();

        $this->AccesstokensApi = new AccesstokensApi($httpClient, $config);
        $this->AccountsApi = new AccountsApi($httpClient, $config);
        $this->BillingApi = new BillingApi($httpClient, $config);
        $this->CheckoutApi = new CheckoutApi($httpClient, $config);
        $this->CompaniesApi = new CompaniesApi($httpClient, $config);
        $this->ComponentsApi = new ComponentsApi($httpClient, $config);
        $this->EntitlementsApi = new EntitlementsApi($httpClient, $config);
        $this->EventsApi = new EventsApi($httpClient, $config);
        $this->FeaturesApi = new FeaturesApi($httpClient, $config);
        $this->PlangroupsApi = new PlangroupsApi($httpClient, $config);
        $this->PlansApi = new PlansApi($httpClient, $config);
        $this->WebhooksApi = new WebhooksApi($httpClient, $config);
    }
}

?>
