$(document).ready(function() {
    $(".clickable-row").on("click", function() {
        $(this).next(".description").toggle();
    }).on("click", "select", function(event) {
        event.stopPropagation();
    });

    $(".btn-next").on("click", function() {
        $currentFormStep = $(".form-step-visible");
        $nextFormStep = $currentFormStep.next();
        $orderSummary = $(".order-summary.element-absent");
        $prevButton = $(".btn-prev.element-absent");

        $currentFormStep.fadeOut(600).removeClass("form-step-visible");
        $nextFormStep.fadeIn(600).addClass("form-step-visible");

        $orderSummary.fadeIn(600).removeClass("element-absent");
        $prevButton.fadeIn(600).removeClass("element-absent");
    })
});
