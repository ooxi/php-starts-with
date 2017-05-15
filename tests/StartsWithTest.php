<?php declare(strict_types=1);

namespace Ooxi\StartsWith\Tests;

use function Ooxi\StartsWith\startsWith;
use PHPUnit\Framework\TestCase;


final class StartsWithTest extends TestCase
{

    public function testDoesStartsWith()
    {
        $this->assertTrue(startsWith('abcd', 'ab'), '`abcd\' should start with `ab\'');
    }

    public function testDoesNotStartWith()
    {
        $this->assertNotTrue(startsWith('abcd', 'ax'), '`abcd\' should not start with `ab\'');
    }
}
