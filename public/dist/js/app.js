$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.select').formSelect();
    $('.datepicker').datepicker();
    M.AutoInit();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();

    // user account register form ajax call
    // $('#create_btn').on('submit', function (event) {
    //     event.preventDefault();
    //     var name = $('#name').val();
    //     var email = $('#email').val();
    //     var pass = $('#password').val();
    //     if (name != '' && email != '' && pass != '') {
    //         var create = $('#create_acc').serialize();
    //         $.ajax({
    //             url: 'http://localhost/PhotoStudio/dashboard/register',
    //             type: 'POST',
    //             data: create,
    //             success: function () {
    //                 alert('user account create successfull');
    //             }
    //         });
    //     } else {
    //         alert('user account was not create successfull');
    //     }
    // });

    // $('delect_btn').on('submit',function (e) {
    //     e.preventDefault();
    //     var name = $('#dname').val();
    //     var email = $('#demail').val();
    //     if (name != '' && email != '') {
    //         $.ajax({
    //             url: 'PhotoStudio/dashboard/delect',
    //             type: 'POST',
    //             data: new FormData(this),
    //             ContentType: false,
    //             processData: false,
    //             success: function (data) {
    //                 alert(data);
    //                 console.log("Successful")
    //                 $('delect_acc')[0].reset();
    //             }
    //         });
    //     }
    //     else {
    //         alert('empty name and email');
    //     }
    // });
});
