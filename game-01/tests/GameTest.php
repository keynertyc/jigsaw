<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    public function testCanBeInitilized(): void
    {
        $game = new Game([2, 5, 8, 14, 0]);
        $this->assertInstanceOf(
            Game::class,
            $game
        );
    }

    public function testCanBeAnArray(): void
    {
        $game = new Game([2, 5, 8, 14, 0]);
        $this->assertIsArray($game->getSubset(10));
    }

    public function testCanBeASubset(): void
    {
        $game = new Game([2, 5, 8, 14, 0]);
        $expected = [2, 8];
        $this->assertEquals($game->getSubset(10),$expected);
    }
}