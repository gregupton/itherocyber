<?php

namespace App\Extensions;

class DatabaseSessionHandler extends \Illuminate\Session\DatabaseSessionHandler
{
    protected function addUserInformation(&$payload)
    {
        if ($this->container->bound(Guard::class)) {
            $payload['authenticable_id'] = $this->userId();
            $payload['authenticable_type'] = $this->container->make(Guard::class)->user()?->getMorphClass();
        }

        return parent::addUserInformation($payload);
    }
}
