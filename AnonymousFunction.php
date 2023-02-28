<?php
// cara 1
// echo preg_replace_callback('/[a-z]+/i', function (array $match) {
// return 'PHP' === $match[0] ? 'OOP' : $match[0];
// }, 'Saya Belajar PHP');
// echo PHP_EOL;

// cara 2
// $print = function ($word) {
// echo $word;
// };
// $print('Ini adalah _lambda function_');
// echo PHP_EOL;

// cara 3
// $word = 'Ini adalah _closure_';
// $print = function () use ($word) {
// echo $word;
// };
// $print();
// echo PHP_EOL;

// cara 4
// $foo = new class{
//     public function foo()
//     {
//     echo 'foo';
//     }
//     };
//     $foo->foo();
//     echo PHP_EOL;

// cara 5
class SebuahClass {}
interface SebuahInterface {}
trait SebuahTrait {}
var_dump(new class(10) extends SebuahClass implements SebuahInterface {
private $num;
public function __construct($num)
{
$this->num = $num;
}
use SebuahTrait;
});
