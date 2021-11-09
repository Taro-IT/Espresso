// Tooltips are handled manually since the data-toggle
// attrubrute of some buttons with tooltips is used for modals
$('.tooltipped-btn').on({
    'mouseenter': function() {
        $(this).tooltip('show');
    },
    'mouseleave': function() {
        $(this).tooltip('hide');
    }
});

// Tooltips are hidden for all buttons on click
// to ensure they don't appear over modals
$('.tooltipped-btn').on({
    'click': function() {
        $(this).tooltip('hide');
    }
});