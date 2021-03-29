<?php


namespace InterfaceUA\dmitriy;


interface UserAgentInterface
{
    public function parse($user_agent);
    public function getBrowserName();
    public function getOsName();
}
