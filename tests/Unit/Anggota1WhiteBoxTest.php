<?php
namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota1WhiteBoxTest extends TestCase
{
    public function test_anggota_1_white_box(): void
    {
        $hasil = ShopRules::discount(150000, true);
        $this->assertSame(15000, $hasil);
    }
}