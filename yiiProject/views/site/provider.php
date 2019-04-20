<?php

use yii\helpers\Html;

$table = 'Providers';

$this->title = "$table table";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= 'Таблица "'.Html::encode($table).'"' ?></h1>
<? if (!Yii::$app->user->isGuest) : ?>

<p>
        <?= Html::a('Редактировать таблицу', ['/'.strtolower($table).'-edit'], ['class' => 'btn btn-primary']) ?>
    </p>

<? endif; ?>
    <div class="table100 ver4 m-b-110">
        <div class="table100-head">
            <table>
                <thead>
                    <tr class="row100 head">

                        <th class="cell100 column1">ID</th>
                        <th class="cell100 column2">Name</th>
                        <th class="cell100 column3">Site</th>
                        <th class="cell100 column4">Rating</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table100-body js-pscroll">
            <table>
                <tbody>
                    <?php foreach ($providers as $provider): ?>
                        <tr class="row100 body">
                            <?= '<td class="cell100 column1">'.$provider['id'].'</td>'?>  
                            <?= '<td class="cell100 column2">'.$provider['name'].'</td>'?>  
                            <?= '<td class="cell100 column3">'.$provider['site'].'</td>'?>  
                            <?= '<td class="cell100 column4">'.$provider['rating'].'</td>'?>  
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>