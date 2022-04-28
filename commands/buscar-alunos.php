<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);


/**
 * @var Aluno [] $alunoList
 */
$alunoList = $alunoRepository->findAll();


foreach ($alunoList as $aluno) {
    echo $aluno->getNome() . PHP_EOL;
}

$unico = $alunoRepository->find(2);

echo $unico->getNome() . PHP_EOL;

//find or findBy or findOneBy or findAll
$alunoTeste7 = $alunoRepository->findOneBy([
    'nome' => 'Aluno TESTE 7'
]);

var_dump($alunoTeste7);