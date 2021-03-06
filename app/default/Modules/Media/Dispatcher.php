<?php

namespace Pina\Modules\Media;

class Dispatcher
{

    public function dispatch($resource)
    {
        if (empty($resource)) {
            return $resource;
        }
        
        $prefix = 'resize/';
        
        if (strncmp($resource, $prefix, strlen($prefix)) === 0) {
            return 'resize';
        }
        
        return null;
    }

}
