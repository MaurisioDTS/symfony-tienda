<?php
namespace App\Services;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

class ProductsService{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public function getProducts(): ?array{
        $repository = $this->doctrine->getRepository(Product::class);
        return $repository->findAll();
    }
}
