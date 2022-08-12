<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route('/pokemon', name: 'app_pokemon')]
    public function index(PokemonRepository $pokemonRepository): Response
    {
        $pokemons = $pokemonRepository->findAllPokemon();

        // dd($pokemons);
        return $this->render('pokemon/index.html.twig',[
                        'pokemons' => $pokemons
                    ]);
    }

    #[Route('/pokemon/{id}', methods: ['GET'], name: 'pokemon_show')]
    public function postShow(Pokemon $pokemon): Response
    {

        return $this->render('pokemon/show.html.twig', [
                                                'pokemon' => $pokemon
                                            ]);
    }
}
