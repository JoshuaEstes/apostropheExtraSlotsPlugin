<?php // Makes it easier to wrap this ?>
<?php $values = $sf_data->getRaw('values') ?>
<?php include_partial('aEcwidProductSlot/normalViewBody', array('pageid' => $pageid, 'name' => $name, 'permid' => $permid, 'slot' => $slot, 'values' => $values, 'storeId' => $storeId)) ?>
