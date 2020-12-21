<?php

namespace App\Http\Controllers;

use  App\Events\PostCreatedEvent;


class PostController extends Controller
{
  public function index(){
    $event = ['title'=>'congo mon pays!'];

    broadcast(new PostCreatedEvent($event))->toOthers();
    return 'message send';
  }

}
