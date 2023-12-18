<?php

namespace Tots\Role\Services;

class RoleService 
{
    public $config = [];
    public $default = 0;

    public function __construct($config)
    {
        $this->config = $config;
        $this->processConfig();
    }

    protected function processConfig()
    {
        if(array_key_exists('default', $this->config)){
            $this->default = $this->config['default'];
        }
    }

    public function getDefault()
    {
        return $this->default;
    }
}
