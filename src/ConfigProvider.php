<?php

namespace Hyperflex\Memory;


class ConfigProvider
{

    public function __invoke(): array
    {
        return [
            'dependencies' => [],
            'scan' => [
                'paths' => [],
            ]
        ];
    }

}