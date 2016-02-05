/*
 * @file
 * JavaScript for aaap events.
 *
 */
(function ($) {
    $(document).ready(function () {
        var proceed = localStorage.getItem('proceed');
        if (proceed == "proceed_as_non_member") {

        } else {
            $('a.login').click();
        }
    });
})(jQuery);