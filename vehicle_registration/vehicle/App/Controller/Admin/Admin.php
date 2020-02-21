<?php
namespace App\Controller\Admin;

use \Core\View;
use \App\Models\Post;

class Admin extends \Core\Controller{
    public function dashboardAction(){
        $grid = Post::select('*', 'products');
        View::renderTemplate('Admin/dashboard.html',['data'=>$grid]);
    }
    public function editAction(){
        $id = $this->route_params['id'];
    }
}
?>