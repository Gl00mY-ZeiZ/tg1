<?php
/**
 * Created by PhpStorm.
 * User: roodya
 * Date: 03.12.14
 * Time: 14:54
 */

class NewsController extends Admin
{

    public function actionIndex(){

        $this->render('list');
    }

    public function actionCreate(){

        $this->render('form');
    }

    public function actionUpdate($id){

    }

    public function actionDelete($id){

    }
} 