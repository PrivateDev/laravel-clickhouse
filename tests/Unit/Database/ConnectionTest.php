<?php

declare(strict_types=1);

namespace Libern\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Libern\LaravelClickHouse\Database\Connection;
use Libern\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
