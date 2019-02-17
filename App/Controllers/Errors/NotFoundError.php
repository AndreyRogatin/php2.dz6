<?php

namespace App\Controllers\Errors;


use App\Exceptions\NotFoundException;

class NotFoundError extends Error
{
    public function __construct(NotFoundException $ex)
    {
        parent::__construct($ex);
    }

    protected function handle()
    {
        $this->view->title = 'Ошибка 404 - не найдено';
        $this->view->ex = $this->ex;
        $this->view->display(__DIR__ . '/../../templates/error.php');
    }
}