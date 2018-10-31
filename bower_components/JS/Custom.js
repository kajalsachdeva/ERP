$(document).ready(function(){
    $('#check_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
     $('form').submit(function () {
        var user_email = $('#useremail').val();
        var password = $('#userpassword').val();
        var regex = /^\s*[a-zA-Z,\s]+\s*$/;
        $(".error").remove();
        if (user_email == "") {
            $('#useremail').after('<span class="error">This field is required</span>');
            return false;
        }
        else
        if (!user_email.match(regex))
        {
            $('#useremail').after('<span class="error">[only character allow]</span>');
            return false;
        }
        if (password == "") {
            $('#userpassword').after('<span class="error">Password required</span>');
            return false;
        }
    });
    $("#userpassword").keydown(function ()
    {
        //alert('kjkj');
        $(".error").html("");
        var number = /([0-9])/;
        var alphabets = /([a-zA-Z])/;
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        if ($('#userpassword').val().length < 6) {
            $('#userpassword').after('<span class="error">weak password</span>');

        }
        else if ($('#userpassword').val().match(number) && $('#userpassword').val().match(alphabets) && $('#userpassword').val().match(special_characters))
        {
            $('#userpassword').after('<span class="error">strong password</span>');
        }
        else
        {
            $('#userpassword').after('<span class="error">medium password</span>');

        }


    });

});