<div class="input-group col-12">
    <div class="input-group-addon">
        <?= $this->generalOption->formElement->options['inputGroup']['prefix']; ?>
    </div>
    <input
        type="text"
        class="form-control"
        name="question[<?= $this->generalOption->name; ?>]" 
        id="<?= CHtml::getIdByName($this->generalOption->name); ?>"
        value="<?= Chtml::encode($this->generalOption->formElement->value); ?>"
        <?= ($this->generalOption->formElement->help) ? 'aria-describedby="help-' . CHtml::getIdByName($this->generalOption->name) . '"' : "" ?>
        <?php foreach ($this->generalOption->formElement->options['attributes'] as $attributeName => $attributeValue) echo $attributeName . '="' . Chtml::encode($attributeValue) . '"'; ?>
    />
    <?php if (isset($this->generalOption->formElement->options['inputGroup']['suffix'])) : ?>
        <div class="input-group-addon">
            <?= $this->generalOption->formElement->options['inputGroup']['suffix']; ?>
        </div>
    <?php endif; ?>
</div>
