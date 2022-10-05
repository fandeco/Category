<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 05.10.2022
 * Time: 15:52
 */

namespace Tests\fandeco\category;

use fandeco\category\Category;
use fandeco\category\Description;
use Mockery;

class DescriptionTest extends TestCase
{

    public function testRaw()
    {

        $double = Mockery::mock('fandeco\category\Description');
        $double->shouldReceive('raw')
            ->once()
            ->andReturn('ответ вернет из того что здесь установлено');


        $Cat = new Category();

        $Cat->return($double);


        echo '<pre>';
        print_r($Cat->getData2());
        die;

    }
}
