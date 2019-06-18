
function onSubmit(){
    var hasErrors = false;
    $('#password-error').hide();
    $('#date-error').hide();
    $('#email-error').hide();
    if($('#password1').val() !== $('#password2').val()){
        $('#password-error').text('Uneseni pasvordi nisu identicni.');
        $('#password-error').show();
        hasErrors = true;
    }
    else if($('#password1').val().length < 6){
        $('#password-error').text('Pasvord je prekratak.');
        $('#password-error').show();
        hasErrors = true;
    }
    else if(!$('#password1').val().match(/[0-9]/)){
        $('#password-error').text('Pasvord treba da sadrzi najmanje jedan broj.');
        $('#password-error').show();
        hasErrors = true;
    }
    if(new Date($('#datum').val()) > new Date()){
        $('#date-error').text('Datum nije dobar.');
        $('#date-error').show();
        hasErrors = true;
    }
    if(new Date($('#datum').val()) > new Date()){
        $('#date-error').text('Datum nije dobar.');
        $('#date-error').show();
        hasErrors = true;
    }
    if(!validateEmail($('#eadresa').val())){
        $('#email-error').text('Email nije ispravan.');
        $('#email-error').show();
        hasErrors = true;
    }
    if(hasErrors){
        return false;
    }
    return true;
  }

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}