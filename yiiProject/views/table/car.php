<?php

use yii\helpers\Html;

$table = 'Cars';

$this->title = "$table table";
?>

<? if (!Yii::$app->user->isGuest) : ?>

  <p>
    <?= Html::a('Edti table', ['/' . strtolower($table) . '-edit'], ['class' => 'btn btn-primary']) ?>
  </p>

<? endif; ?>

<div class="table100 ver5 m-b-110">
  <div class="table100-head">
    <table>
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1">ID</th>
          <th class="cell100 column2">Provider ID</th>
          <th class="cell100 column3">Name</th>
          <th class="cell100 column4">Power</th>
          <th class="cell100 column5">Max speed</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="table100-body js-pscroll">
    <table>
      <tbody>
        <?php foreach ($cars as $car) : ?>
          <a href="/">
            <?= Html::beginTag('tr', ['class' => 'row100 body']) ?>
            <?= Html::tag('td', Html::a(Html::encode($car['id']), ['/car/view', 'id' => $car['id']]),               ['class' => 'cell100 column1']) ?>
            <?= Html::tag('td', Html::a(Html::encode($car['provider_id']), ['/provider/view', 'id' => $car['id']]), ['class' => 'cell100 column2']) ?>
            <?= Html::tag('td', Html::encode($car['name']),        ['class' => 'cell100 column3']) ?>
            <?= Html::tag('td', Html::encode($car['power']),       ['class' => 'cell100 column4']) ?>
            <?= Html::tag('td', Html::encode($car['max_speed']),   ['class' => 'cell100 column5']) ?>
            <?= Html::endTag('tr') ?>
          </a>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>