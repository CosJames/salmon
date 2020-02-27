
$(document).ready(function() {
  let studentInput = $('#studentNumberInput');
  let memberName;
  
  const PROPAGATION_MODE_CAPTURE = true;
  loadClicker();
  
    // Prompt when the card is clicked
  
    studentInput.on('input', function() {
      let str = studentInput.val().replace('e','');
      studentInput.val(str);
    })
  
    var currentMemberCardNum = '';
  
    $(document).on('click','#modal-ok',function() {
      // TODO: Template, migrate to php next time
      let studentNumberInput = studentInput.val();
      let memberCardNo = currentMemberCardNum;
  
      console.log("Student ID: " + studentNumberInput);
      console.log("Member ID: " + memberCardNo);
      $.ajax({
        type: "POST",
        url: `${window.location.href}/php/studentPage.php`,
        data: {studentNumber: studentNumberInput, memberCardNo: memberCardNo},
        beforeSend: function(xhr){
          //resp.html("Please wait...");
          // alert('Loading!')
        },
  
        //Will call if method not exists or any error inside php file
        error: function(qXHR, textStatus, errorThrow){
          //alert('Error!')
          $("#alerts-container").append(`
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> This alert box could indicate a danger or negative action.
            </div>
            `);
        },
  
        success: function(data, textStatus, jqXHR){
            //alert(data);
            // alert('Works!')
            $("#alerts-container").append(`
            <div class="alert alert-success alert-dismissible fade show">
              <strong>Success!</strong> ${memberName} has been paged.
            </div>
            `);
            $('#list').load('php/loadList.php');
            setTimeout(() => {
              $(".alert").fadeTo(500, 0).slideUp(2000, function(){
                $(this).remove(); 
              });
            }, 10000);
        }
      });
      studentInput.val('');
    });

    let closeButtons = document.querySelectorAll(".close-buttons");
    closeButtons.forEach(button => {
      button.addEventListener(
        'click',
        function() {
          $('#studentNumberInput').val('');
        }
      );
    });
  
    function loadClicker() {
      
      let members_info_list = document.querySelectorAll(".member-card");
      members_info_list.forEach(element => {
        element.addEventListener(
          "click",
          function(event) {
            let member_div = event.target.closest(".member-card");
            let name = member_div.dataset.name;
            let modal = $('#modal-body');
            memberName = member_div.dataset.name;
            // console.log(name);
            // console.log(member_div.dataset.card);
            // console.log(member_div.dataset.status);
            currentMemberCardNum = member_div.dataset.card;
            $("#modal-label").html(name);
          },
          PROPAGATION_MODE_CAPTURE
        );
        if (element.dataset.paged == 1) {
          console.log(element.dataset.n);
          element.style = "border: 1px solid blue";
        }
      });
    }
  
  
  
  
    
  
  });
  
  
  