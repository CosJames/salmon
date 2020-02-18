
$(document).ready(function() {
  let studentInput = $('#studentNumberInput');

  const PROPAGATION_MODE_CAPTURE = true;

  // Prompt when the card is clicked

  studentInput.on('input', function() {
    let str = studentInput.val().replace('e','');
    studentInput.val(str);
  })


  $(document).on('click','#modal-ok',function() {
    // TODO: Template, migrate to php next time
    
    console.log(studentInput.val());
    let studentNumberInput = studentInput.value;
    console.log(url);
    $.ajax({
      type: "POST",
      url: `${url}/php/studentPage.php`,
      data: {studentNumber: studentNumberInput},
      beforeSend: function(xhr){
        //resp.html("Please wait...");
      },

      //Will call if method not exists or any error inside php file
      error: function(qXHR, textStatus, errorThrow){
        
      },

      success: function(data, textStatus, jqXHR){
          //alert(data);
          
      }
    });

    $("#alerts-container").append(`
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>
    `);
  });

  function loadClicker() {
    
    let members_info_list = document.querySelectorAll(".member-card");
    members_info_list.forEach(element => {
      element.addEventListener(
        "click",
        function(event) {          
          let member_div = event.target.closest(".member-card");
          let name = member_div.dataset.name;
          console.log(name);
          console.log(member_div.dataset.card);
          console.log(member_div.dataset.status);
          $('#modal-body')
          $("#modal-label").html(name);
        },
        PROPAGATION_MODE_CAPTURE
      );
    });
  }

  loadClicker();



  

});


