<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method array<Article> findAll()
 * @method Article find(int $id)
 * @method int save(array $data)
 * @method int update(int $id, array $data)
 * @method int delete (int $id)
 */
class ProduitModel extends DefaultModel {
    protected string $table = "produit";
    protected string $entity = "Produit";
}