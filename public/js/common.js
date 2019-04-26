$(document).ready(function () {
    $('body').on('click', '.delete', function () {
        return confirm('Are you sure?');
    });
});
