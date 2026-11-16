<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota2WhiteBoxTest extends TestCase
{
    public function test_anggota_2_white_box(): void
  {
      $hasil = ShopRules::discount(150000, false);
      $this->assertSame(7500, $hasil);
  }
}
