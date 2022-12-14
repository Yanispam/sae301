<?php

namespace App\Repository;

use App\Entity\Manifs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Manifs>
 *
 * @method Manifs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Manifs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Manifs[]    findAll()
 * @method Manifs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ManifsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Manifs::class);
    }

    public function save(Manifs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Manifs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function search($mots)
    {
        $query = $this->createQueryBuilder('m');
        $query->where('m.active = 1');
        if($mots != null) {
            $query->andWhere('MATCH_AGAINST(m.titre, m.genre, m.description) AGAINST (:mots boolean)>0')
                ->setParameter('mots', $mots);
        }
        return $query->getQuery()->getResult();
    }

//    /**
//     * @return Manifs[] Returns an array of Manifs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Manifs
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
