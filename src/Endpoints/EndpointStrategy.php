<?php
    declare(strict_types=1);

    namespace smartbusiness\api2\Endpoints;

    /**
     * Class EndpointStrategy
     * @package smartbusiness\api2\Endpoints
     */
    class EndpointStrategy extends \LourensSystems\ApiWrapper\Endpoints\EndpointStrategy
    {

        /**
         * Base api URL
         * @var string
         */
        protected static $apiURLProduction = 'https://api-smartbusiness.postfinance.ch/v2';

        /**
         * Base staging api URL
         * @var string
         */
        protected static $apiURLStaging = '';

    }