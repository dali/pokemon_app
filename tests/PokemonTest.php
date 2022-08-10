<?php


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PokemonTest extends KernelTestCase
{
    
    private $entityManager;

    protected function testSetUp()
    {
        $kernel = self::bootKernel();
        DatabasePrimer::prime($kernel);

        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }



    public function testIsWorks()
    {
        $this->assertTrue(true);
    }
}