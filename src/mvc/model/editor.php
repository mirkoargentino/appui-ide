<?php
if ( isset($this->data['routes']) ){

  $dirs = new \bbn\ide\directories($this->inc->options, $this->data['routes']);

  $res = [
    'default_dir' => $this->inc->session->has('ide', 'dir') ?
      $this->inc->session->get('ide', 'dir') : 'BBN_APP_PATH/mvc/',
    'dirs' => $dirs->dirs(),
    'modes' => $dirs->modes(),
    'menu' => [
      [
        'text' => 'File',
        'items' => [[
          'text' => '<i class="fa fa-plus"></i>New',
          'items' => [[
            'text' => '<i class="fa fa-file-o"></i>File',
            'function' => "appui.ide.newFile()"
          ], [
            'text' => '<i class="fa fa-folder"></i>Directory',
            'function' => "appui.ide.newDir()"
          ]]
        ], [
          'text' => '<i class="fa fa-save"></i>Save',
          'function' => "appui.ide.save();"
        ], [
          'text' => '<i class="fa fa-trash-o"></i>Delete',
        ], [
          'text' => '<i class="fa fa-files-o"></i>Duplicate',
        ], [
          'text' => '<i class="fa fa-search"></i>Search',
        ], [
          'text' => '<i class="fa fa-times-circle"></i>Close',
          'function' => "appui.ide.tabstrip.tabNav('close');"
        ], [
          'text' => '<i class="fa fa-times-circle-o"></i>Close all tabs',
          'function' => "appui.ide.tabstrip.tabNav('closeAll');"
        ]]
      ], [
        'text' => 'Edit',
        'items' => [[
          'text' => 'Find <small>CTRL+F</small>',
          'function' => "appui.ide.search();"
        ], [
          'text' => 'Find next <small>CTRL+G</small>',
          'function' => "appui.ide.findNext();"
        ], [
          'text' => 'Find previous <small>SHIFT+CTRL+G</small>',
          'function' => "appui.ide.findPrev();"
        ], [
          'text' => 'Replace <small>SHIFT+CTRL+F</small>',
          'function' => "appui.ide.replace();"
        ], [
          'text' => 'Replace All <small>SHIFT+CTRL+R</small>',
          'function' => "appui.ide.replaceAll();"
        ]]
      ], [
        'text' => 'History',
        'items' => [[
          'text' => '<i class="fa fa-history"></i>Show',
          'function' => 'appui.ide.history();'
        ], [
          'text' => '<i class="fa fa-trash-o"></i>Clear',
          'function' => 'appui.ide.historyClear();'
        ], [
          'text' => '<i class="fa fa-trash-o"></i>Clear All',
          'function' => 'appui.ide.historyClearAll();'
        ]]
      ], [
        'text' => 'Doc.',
        'items' => [[
          'text' => 'Find',
        ], [
          'text' => 'Generate',
        ]]
      ], /*[
        'text' => 'Current',
        'items' => [[
          'text' => 'Add View',
        ], [
          'text' => 'Add Model',
        ], [
          'text' => 'Remove current',
        ]]
      ], */[
        'text' => 'Pref.',
        'items' => [[
          'text' => 'Manage directories',
          'function' => "appui.ide.cfgDirs();"
        ], [
          'text' => 'IDE style',
          'function' => "appui.ide.cfgStyle();"
        ]]
      ]
    ]
  ];

  return $res;
}