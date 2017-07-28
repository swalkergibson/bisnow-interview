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
<?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
    </div> <!-- /container -->
<?php require_once(dirname(__FILE__) . '/includes/fragments/end_body.php'); ?>
<?php require_once(dirname(__FILE__) . '/includes/fragments/end_html.php'); ?>
