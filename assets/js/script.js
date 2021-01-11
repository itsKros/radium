$(document).ready(function() {

    // Sorting & Scroll Server Location
    $('#serverLocation').mixItUp({
      selectors: { filter: '.filter-1' }
    });
    $("#serverLocation").gScrollingCarousel();

    // Sorting & Scroll Server Type
    $('#serverType').mixItUp({
      selectors: { filter: '.filter-2' }
    });
    $("#serverType").gScrollingCarousel();

    // Scroll Server Size
    $("#serverSize").gScrollingCarousel();

    // Style Number
    $("input[type='number']").inputSpinner()
    
    
    
});