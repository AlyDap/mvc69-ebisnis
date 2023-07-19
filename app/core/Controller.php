<?php

class Controller
{
    /*buat method untuk view. $view adalah 'home/index',
    $data kita isi default array*/
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
