<?php

class UrlController extends \BaseController {

  private $sugar;

  function __construct() {
    $this->sugar = new SugarCall();
  }

  public function welcome() {
    return View::make('welcome');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $json_decoded = json_decode($this->sugar->getBugs(), TRUE);

    return $json_decoded["records"];
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $json_decoded = json_decode($this->sugar->getBug($id), TRUE);

    return $json_decoded;
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }


}
