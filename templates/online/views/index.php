<?php

use yii\apidocchm\models\ClassDoc;
use yii\apidocchm\models\InterfaceDoc;
use yii\apidocchm\models\TraitDoc;

/* @var $types ClassDoc[]|InterfaceDoc[]|TraitDoc[] */
/* @var $this yii\web\View */

?><h1>Class Reference</h1>

<table class="summaryTable docIndex">
    <colgroup>
        <col class="col-package" />
        <col class="col-class" />
        <col class="col-description" />
    </colgroup>
    <tr>
        <th>Class</th>
        <th>Description</th>
    </tr>
<?php
ksort($types);
foreach ($types as $i => $class):
?>
    <tr>
        <td><?= $this->context->typeLink($class, $class->name) ?></td>
        <td><?= \yii\apidocchm\helpers\ApiMarkdown::process($class->shortDescription, $class, true) ?></td>
    </tr>
<?php endforeach; ?>
</table>
