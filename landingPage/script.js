const tabItemsQuery = $(".tab-item");
const tabContentItemsQuery = $('.tab-content-item');

function selectItem(e) {
	// Remove all show and border classes
	removeBorder();
	removeShow();
	// Add border to current tab item
	this.classList.add('tab-border');
	// Grab content item from DOM
	const tabContentItemsQuery = $(`#${this.id}-content`);
	// Add show class
	tabContentItemsQuery.addClass('show');
}

// Remove bottom borders from all tab items
function removeBorder() {
	  $.each( tabItemsQuery, function( index, item ){
		$(this).removeClass('tab-border');
	});
}

// Remove show class from all content items
function removeShow() {
	$.each( tabContentItemsQuery, function( index, item ){
		$(this).removeClass('show');
	});
}


$.each(tabItemsQuery,function() {
	$( this ).on('click', selectItem);
  });