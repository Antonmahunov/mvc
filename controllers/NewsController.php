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
        echo '<br>' . $category;
        echo '<br>' . $id;

        return true;
    }
}
