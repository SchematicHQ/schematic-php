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
    public $AccountsApi;
    public $CompaniesApi;
    public $EntitlementsApi;
    public $EventsApi;
    public $FeaturesApi;
    public $PlansApi;

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

        $this->AccountsApi = new AccountsApi($httpClient, $config);
        $this->CompaniesApi = new CompaniesApi($httpClient, $config);
        $this->EntitlementsApi = new EntitlementsApi($httpClient, $config);
        $this->EventsApi = new EventsApi($httpClient, $config);
        $this->FeaturesApi = new FeaturesApi($httpClient, $config);
        $this->PlansApi = new PlansApi($httpClient, $config);
    }
}

?>
