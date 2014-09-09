<?php

class UrlController extends \BaseController {

  private $sugar;

  function __construct() {
    $this->sugar = new SugarCall();
  }

  public function welcome() {
    return View::make('welcome');
  }

  public function index() {
    $json_decoded = json_decode($this->sugar->getBugs(), TRUE);
    return $json_decoded["records"];
  }

  public function show($id) {
    $json_decoded = json_decode($this->sugar->getBug($id), TRUE);
    return $json_decoded;
  }

}
