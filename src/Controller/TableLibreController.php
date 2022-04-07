<?php
namespace App\Controller;

use App\Model\TableLibreModel;
use Core\Controller\DefaultController;


class TableLibreController extends DefaultController {

public function __construct(
    private TableLibreModel $model = new TableLibreModel
){}

/**
 * Undocumented function
 *
 * @return never
 */
public function index (): never
{
    self::jsonResponse($this->model->findAll(), 200);
}


public function update (int $id, bool $disponible): never
{
    if($this->model->update($id, $disponible)) {
        self::jsonResponse($this->model->find($id), 201);
    }
}

}