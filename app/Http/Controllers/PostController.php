<?php

namespace App\Http\Controllers;

use  App\Events\PostCreatedEvent;


class PostController extends Controller
{
  public function index(){
    $event = ['title'=>'congo mon pays! mise en place de communication avec broadcast'];

    broadcast(new PostCreatedEvent($event))->toOthers();
    return 'message send';
  }

}
