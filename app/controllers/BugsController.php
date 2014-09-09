<?php

class BugsController extends BaseController {
  private $sugar;

  function __construct() {
    $this->sugar = new SugarCall();
  }

  public function welcome() {
    return View::make('welcome');
  }

  public function index() {
    $json_decoded = json_decode($this->sugar->getBugs(), TRUE);
    $offset = $json_decoded["next_offset"];
    $bugs = [];

    foreach($json_decoded["records"] as $item) {
      $bug = new Bug($item);
      array_push($bugs, $bug);
    }

    $bugs = $this->sort($bugs);

    return View::make('index', ['bugs' => $bugs]);
  }

  public function show($id) {
    $json_decoded = json_decode($this->sugar->getBug($id), TRUE);
    $bug = new Bug($json_decoded);

    return View::make('show', ['bug' => $bug]);
  }

  public function showCreateForm() {
    return View::make('create');
  }

  public function createBug() {
    $subject = Input::get('subject');
    $description = Input::get('description');

    $validator = Validator::make(
      array(
        'subject' => $subject,
        'description' => $description
      ),
      array(
        'subject' => 'required',
        'description' => 'required'
      )
    );

    if($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('/bugs/create')->withErrors($validator);
    } else {
      $this->sugar->createBug(Input::all());
      return Redirect::to('/bugs');
    }
  }

  function sort($bugs) {
    return array_values(array_sort($bugs, function($value)
      {
        return $value->number;
      }));
  }
}