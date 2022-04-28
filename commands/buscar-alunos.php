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

/* public function findBy(
    array $criteria,
    ?array $orderBy = null,
    ?int $limit = null,
    ?int $offset = null
) */


/* $alunoRepository->findBy([], ['nome' => 'ASC'], 2, 3); */

/* $criteria: Critério de busca. Array vazio significa sem critério, ou seja, sem filtro, buscando todos os registros;
$orderBy: Critério de ordenação. Um array onde as chaves são os campos, e os valores são 'ASC' para ordem crescente e 'DESC' para decrescente;
$limit: Numéro de resultados para trazer do banco;
$offset: A partir de qual dado buscar do banco. Muito utilizado para realizar paginação de dados. */

var_dump($alunoTeste7);