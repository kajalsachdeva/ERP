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
            project_description: {
                required: true,
                nowhitespace: true
            },
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
//     $('form').submit(function () {
//        var project_id = $('#project_id').val();
//        var project_name = $('#project_name').val();
//        var project_approach = $('#project_approach').val();
//        var plan_status = $('#plan_status').val();
//        var team_lead = $('#team_lead').val();
//        var startdatepicker = $('#startdatepicker').val();
//        var project_description = $('#project_description').val();
//        var project_quality = $('#project_quality').val();
//        var project_status = $('#project_status').val();
//        $(".error").remove();
//        if (project_id == "") {
//            $('#project_id').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (project_name == "") {
//            $('#project_name').after('<span class="error">This field is required</span>');
//            return false;
//        }
//       if (project_approach == "") {
//            $('#project_approach').after('<span class="error">This field is required</span>');
//            return false;
//        }
//       if (plan_status == "") {
//            $('#plan_status').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (team_lead == "") {
//            $('#team_lead').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (startdatepicker == "") {
//            $('#startdatepicker').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (project_description == "") {
//            $('#project_description').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (project_quality == "") {
//            $('#project_quality').after('<span class="error">This field is required</span>');
//            return false;
//        }
//        if (project_status == "") {
//            $('#project_status').after('<span class="error">This field is required</span>');
//            return false;
//        }
//    });
//    


});