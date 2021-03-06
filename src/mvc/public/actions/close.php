<?php
/**
 * @var \bbn\mvc\controller $ctrl
 * @var \bbn\ide\directories $ctrl->inc->dir
 */
if ( isset($ctrl->inc->dir, $ctrl->post['dir'], $ctrl->post['url'], $ctrl->post['editors']) ){
  $ctrl->inc->dir->set_preferences($ctrl->post['dir'], $ctrl->post['editors'], $ctrl->inc->pref);
  $list = $ctrl->inc->session->get('ide', 'list');
  $idx = array_search($ctrl->post['url'], $list);
  if ( $idx !== false ){
    array_splice($list, $idx, 1);
    $ctrl->inc->session->set($list, 'ide', 'list');
    $ctrl->obj->success = 1;
  }
  else{
    $ctrl->obj->error = $r;
  }
}
