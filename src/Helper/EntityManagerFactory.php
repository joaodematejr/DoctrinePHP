<?php 

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory {

    /**
     * @return EntityManagerInterface
     * @return \Doctrine\ORM\ORMException
     */
    public function getEntityManager() : EntityManagerInterface {
        $rootDir = __DIR__.'/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir. '/src'], 
            true
        );
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/var/data/banco.sqlite'
        ];
        return EntityManager::create($connection, $config);
    }
    
}