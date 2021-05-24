<?php
    class Cache
    {
        private static $instances = [];

        private $list;

        function __construct(){
            $this->list = array();
        }

        public static function getInstance(): Cache
        {
            $cls = static::class;
            if (!isset(self::$instances[$cls])) 
            {
                self::$instances[$cls] = new static();
            }

            return self::$instances[$cls];
        }

        public function getService($serviceName)
        {

            foreach($this->list as $service){
                if(strtolower($service->getName())==strtolower($serviceName))
                {
                    // echo "</br>Cache ".$service->getName()." telah terbuat : ";
                    return $service;
                }
            }
            echo "</br>";
            return null;
        }
        public function addService($newService)
        {
            
            array_push($this->list, $newService);
        }
    } 
