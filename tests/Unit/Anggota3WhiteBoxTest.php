<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota3WhiteBoxTest extends TestCase
{
    public function test_anggota_3_white_box(): void
  {
      $hasil = ShopRules::discount(50000, false);
      $this->assertSame(0, $hasil);
  }
}
