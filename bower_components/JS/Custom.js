$(document).ready(function () {
    $('#check_all').on('click', function () {
        if (this.checked) {
            $('.checkbox').each(function () {
                this.checked = true;
            });
        } else {
            $('.checkbox').each(function () {
                this.checked = false;
            });
        }

    });

    $("#form").validate({
        rules: {
            project_id: {
                required: true,
                number: true,
                maxlength: 9
            },
            project_approach: {
                required: true
            },
            plan_status: {
                required: true
            },
            team_lead: {
                required: true
            },
            start_date: {
                required: true,
            },
//            project_description: {
//                required: true,
//                nowhitespace: true
//            },
            project_quality: {
                required: true
            },
            project_status: {
                required: true
            },
            project_name: {
                required: true
            },
            client_name: {
                required: true
            },
            project_manager: {
                required: true,
                nowhitespace: true
            }

        },
        messages: {
            project_id: 'please enter valid project id',
            project_approach: 'please enter project approach',
            plan_status: 'please enter plan status',
            team_lead: 'please enter team lead',
            start_date: 'please enter project start date',
            project_description: 'please enter project description',
            project_quality: 'please enter project quality',
            project_status: 'please enter project status',
            project_name: 'please enter project name',
            project_manager: 'please enter project manager',
        }
    });
    $("#login_form").validate({
        rules: {
            email: {
                 required: true
            }
        }
    });

$("body").on("click", ".fa-plus-square", function(){
   $('.box-body').append( $('#act').html() ); 
   
});

 $("body").on("click",".fa-minus-square",function(){
       $(this).parents('.row').remove();
      
  });

});