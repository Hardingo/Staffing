<?php 
    require APROOT . "/views/includes/header.php";
?>
    <div class="content">
        <div class="row">
            <div class="col-4">
                <form action="<?php echo URLROOT . 'datasets'?>" method="POST">
                    <div class="form-group">
                        <label for="service_line">Service Line</label>
                        <input type="text" class="form-control" id="service_line" name="service_line" placeholder="Service Line">
                    </div>
                    <button class="btn btn-success" >Add</button>
                </form>
            </div>
            <div class="col-4">
                <form action="<?php echo URLROOT . 'datasets'?>" method="POST">
                    <div class="form-group">
                        <label for="service_line">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                    </div>
                    <button class="btn btn-success" name="location-submit">Add</button>
                </form>
            </div>
            <div class="col-4">
                <form>
                    <div class="form-group">
                        <label for="service_line">Cost Center</label>
                        <input type="text" class="form-control" id="cost_center" name="cost_center" placeholder="Cost Center">
                    </div>
                    <button class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
<?php 
    require APROOT . "/views/includes/footer.php";
?>