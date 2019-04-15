<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testcountcar()
    {
        // Make call to application...
        $results = Car::get();
        $this->assertCount(50,$results);
    }
    public function testCarYearDataType()
    {
        $car = Car::find(1);
//        dd($car);
        $this->assertTrue(true);
        //      dd(gettype($car->model_year));
        $this->assertInternalType('string',$car->make);
    }
    public function testfinduser()
    {
//        $this->assertTrue(true);
        $car = Car::find(1);
        $this->assertEquals($car->make, 'Ford');
    }
    public function testAddcar()
    {
        $car = new Car;
        $car = Car::create(['make' => 'Ford','model' => 'Branco','model_year' => '1905']);
        $this->assertEquals('Ford', $car->make);
    }
}
