<?php


namespace App\Tests;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PokemonTest extends KernelTestCase
{
    
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel([
            'environment' => 'test',
            'debug'       => false,
        ]);
        DatabasePrimer::prime($kernel);

        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }


    /* Initial test */
    public function testIsWorks()
    {
        $this->assertTrue(true);
    }

    /**
     * @test 
     */ 
    public function a_pokemon_record_can_be_created_in_the_database()
    {
     
        $pokemon = new Pokemon();

        $pokemon->setName('Bulbasaur');
        
        $this->entityManager->persist($pokemon);

        $this->entityManager->flush();

        $pokemonRepository = $this->entityManager->getRepository(Pokemon::class);

        $pokemonRecord = $pokemonRepository->findOneBy(['name' => 'Bulbasaur']);

        $this->assertEquals('Bulbasaur', $pokemonRecord->getName());
    }
    
}