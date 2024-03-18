<?php

namespace Schematic;

use Schematic\Configuration;
use Schematic\Api\AccountsApi;
use Schematic\Api\CompaniesApi;
use Schematic\Api\EntitlementsApi;
use Schematic\Api\EventsApi;
use Schematic\Api\FeaturesApi;
use Schematic\Api\PlansApi;

class Schematic
{
    public $Accounts;
    public $Companies;
    public $Entitlements;
    public $Events;
    public $Features;
    public $Plans;

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

        $this->Accounts = new AccountsApi($httpClient, $config);
        $this->Companies = new CompaniesApi($httpClient, $config);
        $this->Entitlements = new EntitlementsApi($httpClient, $config);
        $this->Events = new EventsApi($httpClient, $config);
        $this->Features = new FeaturesApi($httpClient, $config);
        $this->Plans = new PlansApi($httpClient, $config);
    }
}

?>
