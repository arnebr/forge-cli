<?php

namespace App\Clients;

use Laravel\Forge\Forge as BaseForge;

class Forge extends BaseForge
{
    /**
     * Get the server logs.
     *
     * @param  string|int  $serverId
     * @param  string  $type
     * @return object
     */
    public function logs($serverId, $type)
    {
        return (object) $this->get("servers/$serverId/logs?file=$type");
    }
}