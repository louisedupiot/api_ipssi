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
class TableLibreModel extends DefaultModel {
    protected string $table = "table_libre";
    protected string $entity = "TableLibre";
}