<?php
if ( !empty($this->data['file']) && !empty($this->data['dir']) ){
  $dir = new \bbn\ide\directories($this->inc->options);
  if ( $res = $dir->load($this->data['file'], $this->data['dir'], $this->inc->pref) ){
    return $res;
  }
  return ['error' => $dir->get_last_error()];
}