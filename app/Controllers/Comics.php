<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
  protected $comicsModel;
  public function __construct()
  {
    $this->comicsModel = new ComicsModel();
  }

  public function index()
  {

    $data = [
      'title' => 'Daftar Komik',
      'comics' => $this->comicsModel->getComics()
    ];

    return view('comics/index', $data);
  }

  public function detail($slug)
  {
    $data = [
      'title' => 'Detail Komik',
      'comic' => $this->comicsModel->getComics($slug)
    ];

    return view('/comics/detail', $data);
  }
}
