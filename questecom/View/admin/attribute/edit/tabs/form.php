<?php if ($id = $this->getRequest()->getGet('id')): ?>
    <h1>Update Attribute</h1>
<?php else: ?>
    <h1>Insert Attribute</h1>
<?php endif;?>

<?php $attribute = $this->getTableRow();?>

<hr><br>
<form action="<?php echo $this->getFormUrl() ?>" method="post">

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Entity Type</label>
            <select class="custom-select" name="attribute[entityTypeId]" required>
                <option value="">- select Entity Type -</option>
                <?php foreach ($attribute->getEntityTypeOptions() as $key => $value): ?>
                    <option value="<?php echo $key ?>" <?php if ($attribute->entityTypeId == $key): ?> selected <?php endif;?>><?php echo $value; ?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="attribute Name" name="attribute[name]" required value="<?php echo $attribute->name; ?>">
        </div>
        <div class="form-group col-md-4">
            <label>Code</label>
            <input type="text" class="form-control" placeholder="attribute Code" name="attribute[code]" required value="<?php echo $attribute->code; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Input Type</label>
            <select class="custom-select" name="attribute[inputType]" required>
                <option value="">- Select Input Type -</option>
                <?php foreach ($attribute->getInputTypeOptions() as $key => $value): ?>
                    <option value="<?php echo $key ?>" <?php if ($attribute->inputType == $key): ?> selected <?php endif;?>><?php echo $value; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Backend Type</label>
            <select class="custom-select" name="attribute[backendType]" required>
                <option value="">- Select Backen Type -</option>
                <?php foreach ($attribute->getBackendTypeOptions() as $key => $value): ?>
                    <option value="<?php echo $key ?>" <?php if ($attribute->backendType == $key): ?> selected <?php endif;?>><?php echo $value; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Sort Order</label>
            <input type="text" class="form-control" placeholder="attribute order" name="attribute[sortOrder]" required value="<?php echo $attribute->sortOrder; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Backend Model</label>
            <input type="text" class="form-control" placeholder="backend Model" name="attribute[backendModel]" value="<?php echo $attribute->backendModel; ?>">
        </div>
    </div>
    <br>
    <?php if ($id): ?>
        <button class="btn btn-warning">Update Attribute</button>
    <?php else: ?>
        <button class="btn btn-warning">Insert Attribute</button>
    <?php endif;?>
</form>
