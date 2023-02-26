<?php
class NewsController
{
    public function actionIndex()
    {
        echo 'News list';

        return true;
    }

    public function actionView($category, $id)
    {
        echo '<br> category: ' . $category;
        echo '<br> id: ' . $id;

        return true;
    }
}
