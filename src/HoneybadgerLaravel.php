<?php

namespace Honeybadger\HoneybadgerLaravel;

use Honeybadger\Honeybadger;
use Honeybadger\Contracts\Reporter;

class HoneybadgerLaravel
{
    const VERSION = '2.0.0';

    /**
     * Honeybadger factory.
     *
     * @param  array  $config
     * @return \Honeybadger\Contracts\Reporter
     */
    public function make($config) : Reporter
    {
        return Honeybadger::new(array_merge([
            'notifier' => [
                'name' => 'Honeybadger Laravel',
                'url' => 'https://github.com/honeybadger-io/honeybadger-laravel',
                'version' => self::VERSION,
            ],
        ], $config));
    }
}
