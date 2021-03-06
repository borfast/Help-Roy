<?php

namespace HelpRoy\Storage\AnimalTypes;

use HelpRoy\Storage\AbstractEloquentRepository;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentAnimalTypesRepository extends AbstractEloquentRepository implements AnimalTypesRepositoryInterface
{
    /**
     * Constructor
     *
     * @param AnimalType $model An instance of the model we'll be operating on.
     */
    public function __construct(AnimalType $model)
    {
        $this->model = $model;
    }
}
