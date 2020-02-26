<?php 
    require APROOT . "/views/includes/header.php";
?>

<div class="content">
    <div class="row">
        <div class="col">
            <form class="add-employee-form" action="<?php echo URLROOT . 'employees/add'?>" method="POST">
                <div class="form-header">
                    <h4><i class="fas fa-users"></i> <span class="ml-3">Add employee data</span></h4>
                </div>
        <div class="form-body">
            <div class="form-group">
                <label for="service_line">Service Line</label>
                <input type="text" class="form-control" id="service_line" name="service_line" placeholder="Service Line">
            </div>
            <div class="form-group">
                <label for="cost_center">Cost Center</label>
                <input type="text" class="form-control" id="cost_center" name="cost_center" placeholder="Cost Center">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="staffing_status">Staffing Status</label>
                <select class="form-control" id="staffing_status" name="staffing_status">
                    <option value="On boarded" default>On boarded</option>
                    <option value="Secured">Secured</option>
                    <option value="On hold">On hold</option>
                    <option value="Vacant">Vacant</option>
                    <option value="Suspended">Suspended</option>
                    <option value="Maternity">Maternity</option>
                </select>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
            </div>
            <div class="form-group">
                <label for="first_language">First Language</label>
                <input type="text" class="form-control" id="first_language" name="first_language" placeholder="First Language">
            </div>
            <div class="form-group">
                <label for="second_language">Second Language</label>
                <input type="text" class="form-control" id="second_language" name="second_language" placeholder="Second Language">
            </div>
            <div class="form-group">
                <label for="fte">FTE</label>
                <input type="number" class="form-control" id="fte" name="fte" placeholder="FTE">
            </div>
            <div class="form-group">
                <label for="confirmed_sizing">Confirmed Sizing</label>
                <input type="text" class="form-control" id="confirmed_sizing" name="confirmed_sizing" placeholder="Confirmed Sizing">
            </div>
            <div class="form-group">
                <label for="hire_date">Hire Date</label>
                <input type="date" class="form-control" id="hire_date" name="hire_date" placeholder="Hire Date">
            </div>
            <div class="form-group">
                <label for="comments">Comments</label>
                <input type="text" class="form-control" id="comments" name="comments" placeholder="Comments">
            </div>
            </div>
             
            <div class="form-footer">
               <div class="form-group mt-3">
                    <button type="submit" class="btn btn-light" name="add_employee">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<?php 
    require APROOT . "/views/includes/footer.php";
?>