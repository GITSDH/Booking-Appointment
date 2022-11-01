$(document).ready(function () {
    $('#sidemenutoggle').click(function (e) {
        e.preventDefault();
        $('#sidebar').toggleClass('w-64');
        $('#toggleIcon').toggleClass('rotate-180');
        $('#siteLogo').toggleClass('hidden', 'flex');
    });
});


// ll
