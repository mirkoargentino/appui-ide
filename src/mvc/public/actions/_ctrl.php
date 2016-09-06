<?php
/**
 * These actions can only be accessed if the user is an admin
 *
 **/

/** @var $ctrl \bbn\mvc\controller */

if ( $ctrl->inc->user->is_admin() ){
  $ctrl->add_inc("dir", new \bbn\ide\directories($ctrl->inc->options, $ctrl->get_routes()));
}
else{
  return false;
}