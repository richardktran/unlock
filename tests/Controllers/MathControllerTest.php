<?php
declare(strict_types=1);

namespace Khoatran\Tests\Controllers;

use Khoatran\Unlock\Controllers\MathController;
use PHPUnit\Framework\TestCase;

class MathControllerTest extends TestCase
{
    /**
     * @dataProvider fibonacciProvider
     * @return void
     */
    public function testFibonacci($params, $expected)
    {
        $math = new MathController();
        $result = $math->fibonacci($params['number']);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array[]
     */
    public function fibonacciProvider(): array
    {
        return [
            'case-fibonacci-0' => [
                'params' => [
                    'number' => 0
                ],
                'expected' => 0
            ],
            'case-fibonacci-1' => [
                'params' => [
                    'number' => 1
                ],
                'expected' => 1
            ],
            'case-fibonacci-2' => [
                'params' => [
                    'number' => 2
                ],
                'expected' => 1
            ],
            'case-fibonacci-3' => [
                'params' => [
                    'number' => 3
                ],
                'expected' => 2
            ],
            'case-fibonacci-4' => [
                'params' => [
                    'number' => 4
                ],
                'expected' => 3
            ],
        ];
    }
}
