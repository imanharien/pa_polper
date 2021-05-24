<?php
    include('InitialContext.php');
    include('Cache.php');

    class ServiceLocator
    {
        private static $cache;
        static function getService($jndiName) : Service
        {

            $cache = Cache::getInstance();

            $service = $cache->getService($jndiName);
            if($service!=null)
            {
                return $service;
            }
            $context = new InitialContext();
            $service1 = $context->lookup($jndiName);
            $cache->addService($service1);
            return $service1;
        }
    }