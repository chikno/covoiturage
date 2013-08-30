<?php

namespace MyApp\CovoiturageBundle\Tests\Recherche;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use MyApp\CovoiturageBundle\Recherche\RechercheTrajet;

class RechercheTrajetTest extends WebTestCase
{
      public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->em = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
    }
    
    public function testRechercheTrajet(){
        $recherche = new RechercheTrajet();
        $trajet = $recherche->rechercheTrajet(123,12,new \DateTime("2012-07-08"));
     
        $this->assertTrue(true);
    }
}
