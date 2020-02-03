$(document).ready(function() {
  // Prompt when the card is clicked
  $(document).on('click','#modal-ok',function() {
    // TODO: Template, migrate to php next time
    $("#alerts-container").append(`
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>
    `);
  });
});


