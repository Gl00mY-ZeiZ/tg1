<?php

class UserController extends Admin
{

    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('User');

        $this->render('list',array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function actionCreate()
    {

        $this->render('form');

    }

    public function actionDelete()
    {

    }

    public function actionUpdate()
    {

    }


}