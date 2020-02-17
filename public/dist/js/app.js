$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.select').formSelect();
    $('.datepicker').datepicker();
    M.AutoInit();
    $('.dropdown-trigger').dropdown();

// user account register form ajax call
    $('#create_btn').click(function(event){
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var pass = $('#password').val();
        if(name != '' && email != '' && pass != ''){
            var create = $('#create_acc').serialize();
            $.ajax({
                url:'<?php echo htmlspecialchars(SITE_URL."/dashboard/") ;?>'+"register",
                type:'POST',
                data: create,
                success:function(){
                    console.log('user account create successfull');
                    alert('user account create successfull')
                }
            });
        }else{
            console.log('user account was not create successfull');
        }
    });
});
