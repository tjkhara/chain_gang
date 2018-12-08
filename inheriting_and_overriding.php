<?php

class User {

  var $is_admin = false;

  var $first_name;
  var $last_name;
  var $username;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends User {
  var $city;
  var $state;
  var $country;

  function location()
  {
    return $this->city . ' ' . $this->state . ' ' . $this->country . "<br>";
  }
}

class AdminUser extends User
{
  var $is_admin = true;

  function full_name() {
    return $this->first_name . " " . $this->last_name . " (admin)";
  }
}

$u = new User();
$u->first_name = "Jerry";
$u->last_name = "Seinfeld";
$u->username = "jseinfeld";

$c = new Customer();
$c->first_name = "George";
$c->last_name = "Costanza";
$c->username = "gcostanza";
$c->city = "New York";
$c->state = "New York";
$c->country = "United States";

echo $u->full_name() . "<br>";
echo $c->full_name() . "<br>";
echo $c->location() . "<br>";

echo get_parent_class($u). "<br>";
echo get_parent_class($c). "<br>";

echo(is_subclass_of($c,"User") ? "yes" : "no");

echo "<hr>";

$parents = class_parents($c);

echo "Parents array: " . implode(', ', $parents) . "<br>";
