$(document).ready(function() {
    console.log("jQuery is working!");
    $("#show").click(function () {
        $("#show-more").slideToggle(1000,'linear');
    });
    //
    $('#togglePassword').click(function() {
        const passwordInput = $('#password');
        const toggleButton = $(this);
    
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            toggleButton.text('Hide');
        } else {
            passwordInput.attr('type', 'password');
            toggleButton.text('Show');
        }
    });
//
});


