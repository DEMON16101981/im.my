<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
   protected function inputData()
   {
      $db = Model::instance();

      $table = 'teachers';

      $files['gallery_img'] = [""];
      $files['img'] = '';

      $_POST['id'] = 8;
      $_POST['name'] = '';
      $_POST['content'] = "<p>New' book1</p>";

      $res = $db->edit($table);

      exit('id=' . $res['id'] . ' Name = ' . $res['name']);
   }
}
