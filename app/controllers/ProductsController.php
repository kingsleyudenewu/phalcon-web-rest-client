<?php

class ProductsController extends ControllerBase
{

    public function searchAction()
    {
        $posts = Apicalls::get('posts');

        $this->view->posts = $posts;
    }
    
    public function testAction()
    {
        $this->view->pick("products/another_view");
    }
    
    public function newAction()
    {
        
        return $this->response->redirect("/");
        
    }
}

