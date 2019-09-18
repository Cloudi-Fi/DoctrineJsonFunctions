<?php

namespace Scienta\DoctrineJsonFunctions\Tests\Query\Functions\Mysql;

use Scienta\DoctrineJsonFunctions\Tests\Query\MysqlTestCase;
use Doctrine\ORM\Query\Expr;

class JsonPrettyTest extends MysqlTestCase
{
    public function testJsonPretty()
    {
        $this->assertDqlProducesSql(
            "SELECT JSON_PRETTY('\"null\"') from Scienta\DoctrineJsonFunctions\Tests\Entities\Blank b",
            "SELECT JSON_PRETTY('\"null\"') AS sclr_0 FROM Blank b0_"
        );
    }
}
