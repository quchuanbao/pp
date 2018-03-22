var UIConfirmations = function () {

    var handleSample = function () {

        $('.listdel').on('confirmed.bs.confirmation', function () {
            window.location.href = $(this).data('href');
            //alert($(this).data('href'));
        });

        $('.listdel').on('canceled.bs.confirmation', function () {
            //alert('You canceled action #1');
        });
    }


    return {
        //main function to initiate the module
        init: function () {

            handleSample();

        }

    };

}();

jQuery(document).ready(function() {
    UIConfirmations.init();
});