<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 11:04
   */

  class Chef
  {
    public static function make_dinner()
    {
      echo "Cook food.";
    }
  }

  class AmateurChef extends Chef
  {
    public static function make_dinner()
    {
      echo "Read recipe. ";
      parent::make_dinner(); // TODO: Change the autogenerated stub
      echo " Clean up mess. ";
    }
  }

  Chef::make_dinner() . "<br>";

  echo "<br>";

  AmateurChef::make_dinner() . "<br>";