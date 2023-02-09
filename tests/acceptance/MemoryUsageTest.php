<?php

declare(strict_types=1);

namespace Phpolar\Phpolar;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

use const \Phpolar\Phpolar\Tests\PROJECT_MEMORY_USAGE_THRESHOLD;

final class MemoryUsageTest extends TestCase
{
    #[Test]
    #[TestDox("Memory usage for a get request shall be below " . PROJECT_MEMORY_USAGE_THRESHOLD . " bytes")]
    public function shallBeBelowThreshold1()
    {
        $totalUsed = -memory_get_usage();
        // do something
        $totalUsed += memory_get_usage();
        $this->assertGreaterThan(0, $totalUsed);
        $this->assertLessThanOrEqual((int) PROJECT_MEMORY_USAGE_THRESHOLD, $totalUsed);
    }

    #[Test]
    #[TestDox("Memory usage for a post request shall be below " . PROJECT_MEMORY_USAGE_THRESHOLD . " bytes")]
    public function shallBeBelowThreshold2()
    {
        $totalUsed = -memory_get_usage();
        // do something
        $totalUsed += memory_get_usage();
        $this->assertGreaterThan(0, $totalUsed);
        $this->assertLessThanOrEqual((int) PROJECT_MEMORY_USAGE_THRESHOLD, $totalUsed);
    }
}
