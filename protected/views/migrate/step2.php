<?php $this->pageTitle = $step->title . ' - ' . Yii::app()->name; ?>

<h1 class="page-header"> Step <?=$step->sorder?>: <?=$step->title?> </h1>

<form role="form" method="post" action="<?php echo Yii::app()->createUrl("migrate/step{$step->sorder}"); ?>">

<div id="step-content">
    <blockquote> <p class="tip"> <?php echo Yii::t('frontend', $step->descriptions); ?> </p> </blockquote>

    <!--    Form Buttons-->
    <?php if ($step->status == MigrateSteps::STATUS_NOT_DONE): ?>
        <div class="step-controls">
            <button type="submit" class="btn btn-primary"><?php echo Yii::t('frontend', 'Start'); ?></button>
        </div>
    <?php else: ?>
        <div class="step-controls">
            <input type="hidden" id="reset" name="reset" value="0" />
            <button type="submit" class="btn btn-danger reset"><?php echo Yii::t('frontend', 'Reset'); ?></button>
            <a href="<?php echo Yii::app()->createUrl("migrate/step" . ++$step->sorder); ?>" class="btn btn-primary"><?php echo Yii::t('frontend', 'Next Step'); ?></a>
        </div>
    <?php endif; ?>
    <!--//   Form Buttons-->

    <ul class="list-group">
        <li class="list-group-item">
            <h3 class="list-group-item-heading">
                <?php if ($step->status == MigrateSteps::STATUS_DONE): ?>
                    <span class="glyphicon glyphicon-ok-sign text-success"></span>
                <?php endif; ?>
                <?php echo Yii::t('frontend', 'Product Attribute Sets'); ?> (<?php echo sizeof($attribute_sets); ?>)
            </h3>

            <!--
            <?php if ($attribute_sets): ?>
            <ul class="list-group" style="display: none;">
            <?php foreach ($attribute_sets as $attribute_set): ?>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="attribute-set-<?php echo $attribute_set->attribute_set_id; ?>" name="attribute_set_ids[]" value="<?php echo $attribute_set->attribute_set_id; ?>" />
                        <?php echo $attribute_set->attribute_set_name; ?>
                    </label>
                </h4>

                <?php
                    //get all attribute groups of current attribute set
                    $condition = "attribute_set_id = {$attribute_set->attribute_set_id}";
                    $attribute_groups = Mage1AttributeGroup::model()->findAll($condition);
                ?>

                <?php if ($attribute_groups): ?>
                <ul class="list-group">
                    <?php foreach ($attribute_groups as $attribute_group): ?>
                    <li class="list-group-item">
                        <h5 class="list-group-item-heading">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="attribute-group-<?php echo $attribute_group->attribute_group_id; ?>" name="attribute_group_ids[<?php echo $attribute_set->attribute_set_id; ?>][]" class="attribute-group-<?php echo $attribute_set->attribute_set_id; ?>" value="<?=$attribute_group->attribute_group_id?>" />
                                <?php echo $attribute_group->attribute_group_name; ?>
                            </label>
                        </h5>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif;?>
            </li>
            <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            -->
        </li>
        <li class="list-group-item">
            <h3 class="list-group-item-heading">
                <?php if ($step->status == MigrateSteps::STATUS_DONE): ?>
                    <span class="glyphicon glyphicon-ok-sign text-success"></span>
                <?php endif; ?>
                <?php echo Yii::t('frontend', 'Product Attributes'); ?> (<?php echo MigrateSteps::getTotalVisibleProductsAttr(); ?>)
            </h3>
        </li>
    </ul>

    <!--    Form Buttons-->
    <?php if ($step->status == MigrateSteps::STATUS_NOT_DONE): ?>
        <div class="step-controls">
            <button type="submit" class="btn btn-primary"><?php echo Yii::t('frontend', 'Start'); ?></button>
        </div>
    <?php else: ?>
        <div class="step-controls">
            <input type="hidden" id="reset" name="reset" value="0" />
            <button type="submit" class="btn btn-danger reset"><?php echo Yii::t('frontend', 'Reset'); ?></button>
            <a href="<?php echo Yii::app()->createUrl("migrate/step" . ++$step->sorder); ?>" class="btn btn-primary"><?php echo Yii::t('frontend', 'Next Step'); ?></a>
        </div>
    <?php endif; ?>
    <!--//   Form Buttons-->
</div>
</form>
