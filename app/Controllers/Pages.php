<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | WebProgrammingRaka',
    ];

    return view('pages/home', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Me',
    ];

    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
      'location' => [
        [
          'type' => 'Rumah',
          'address' => 'Jl. Kenangan No. 123',
          'city' => 'Jakarta'
        ],
        [
          'type' => 'Kantor',
          'address' => 'Jl. Kulo No. 321',
          'city' => 'Bandung'
        ]
      ]
    ];

    return view('pages/contact', $data);
  }
}
