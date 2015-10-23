jQuery(document).ready(function () {

//alert('hola');

    jQuery('.form-item-roles .form-checkbox').change(
            function () {
                //alert('Cambió!'+jQuery(this).val());

                jQuery('.form-item-roles .form-checkbox:enabled ').attr('checked', false);
                jQuery(this).attr('checked', true);
            }
    );
    //

    jQuery('.uc-cart-checkout-form #edit-cancel').click(
            function (e) {
                e.preventDefault();

                window.location.href = "/cancel-order";
            }
    );

    //jQuery("#comment-form #edit-submit").val("Post Comment");

});