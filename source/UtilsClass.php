<?php

class UtilsClass {

    public $configPath = 'C:\xampp\htdocs\projects\Hotel-Projekt\config.json';

    /**
     * returns the value for the passed config parameter
     * @param $parameterName
     * @return false|mixed
     */
    public function getConfigParameter($parameterName){
        $json = file_get_contents($this->configPath);
        $config = json_decode($json,true);
        if(isset($config[$parameterName])){
            return $config[$parameterName];
        }else{
            return false;
        }
    }

    /**
     * returns an array with all config parameters from the config.json
     * @return mixed
     */
    public function getFullConfig(){
        $json = file_get_contents($this->configPath);
        $config = json_decode($json,true);
        return $config;
    }

}
