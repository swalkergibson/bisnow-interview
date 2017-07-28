<?php require_once(dirname(__FILE__) . '/includes/fragments/start_html.php'); ?>
<?php require_once(dirname(__FILE__) . '/includes/fragments/start_head.php'); ?>
        <title>Home | Bisnow Interview</title>
<?php require_once(dirname(__FILE__) . '/includes/fragments/end_head.php'); ?>
<?php require_once(dirname(__FILE__) . '/includes/fragments/start_body.php'); ?>
<?php require_once(dirname(__FILE__) . '/includes/menus/main.php'); ?>
    <div id="mainContent" class="container">
      <form id="contactInformation" action="/contact/index.php" method="post">
        <div class="form-group form-group-lg">
            <label for="contactInformationInput">Contact Information</label>
            <input type="text" class="form-control" id="contactInformationInput" placeholder="Contact Information" name="contactInformation">
        </div>
        <button type="submit" class="btn btn-default" name="contactInformationSubmit" id="contactInformationSubmit">Submit</button>
      </form>
      <div id="resultTable" class="table-responsive">
        <h2>Submitted Data</h2>
        <table class="table table-bordered">
          <thead>
            <tr><th>Label</th><th>Data</th></tr>
          </thead>
          <tbody>
            <tr><td>Name</td><td id="nameDisplay"></td></tr>
            <tr><td>Email</td><td id="emailDisplay"></td></tr>
            <tr><td>Phone</td><td id="phoneDisplay"></td></tr>
            <tr><td>Address</td><td id="addressDisplay"></td></tr>
          </tbody>
        </table>
      </div>
<?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
    </div> <!-- /container -->
<?php require_once(dirname(__FILE__) . '/includes/fragments/end_body.php'); ?>
<?php require_once(dirname(__FILE__) . '/includes/fragments/end_html.php'); ?>
