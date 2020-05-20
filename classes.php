<?php
class User {
  // Properties
  public $id;
  public $name;
  public $email;
  public $password;


  // Methods
  function set_id($id) {
    $this->id = $id;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$Sam = new User();
$Sam->set_name('Sam');
echo $Sam->get_name();

class Post {
    public $id;
    public $name;
    public $user_name;
    public $content;
}
 function __construct( $id,$name, $user_name , $content) {
  $this->id = $id;
  $this->name = $name;
  $this->user_name = $user_name;
  $this->content = $content;
}
function set_id($id) {
    $this->id = $id;
  }
  function set_user_name($user_name) {
    $this->user_name = $user_name;
  }
  function get_user_name() {
    return $this->user_name;
  }

?>