<?php

class Bug {
  var $id, $number, $subject, $status, $priority, $type, $category, $resolution, $description;
  var $created_by_name, $assigned_user_name, $date_entered;


  function __construct($options) {
    $this->id = $options["id"];
    $this->number = $options["bug_number"];
    $this->subject = $options["name"];
    $this->status = $options["status"];
    $this->priority = $options["priority"];
    $this->type = $options["type"];
    $this->category = $options["product_category"];
    $this->resolution = $options["resolution"];
    $this->description = $options["description"];
    $this->created_by_name = $options["created_by_name"];
    $this->assigned_user_name = $options["assigned_user_name"];
    $this->date_entered = $options["date_entered"];
  }

}