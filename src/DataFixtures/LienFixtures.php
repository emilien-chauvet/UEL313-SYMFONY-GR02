<?php

namespace App\DataFixtures;

use App\Entity\Lien;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LienFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
          // création d'un premier lien
          $lien = new Lien();
          $lien->setLienTitre("Premier lien");
          $lien->setLienDesc("Lorem ipsum");
          $lien->setLienUrl("Lorem ipsum");
          $manager->persist($lien);
  
          // création d'un second lien
          $lien = new Lien();
          $lien->setLienTitre("Second lien");
          $lien->setLienDesc("Lorem ipsum");
          $lien->setLienUrl("Lorem ipsum");
          $manager->persist($lien);

        $manager->flush();
    }
}
