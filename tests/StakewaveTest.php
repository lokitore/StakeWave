<?php
/**
 * Tests for StakeWave
 */

use PHPUnit\Framework\TestCase;
use Stakewave\Stakewave;

class StakewaveTest extends TestCase {
    private Stakewave $instance;

    protected function setUp(): void {
        $this->instance = new Stakewave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Stakewave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
