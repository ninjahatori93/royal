$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});


$('#show_filter').click(function(){
  $('#filter').show('slide');
  $('#hide_filter').show('slide');
  $('#show_filter').hide('slide');
});

$('#hide_filter').click(function(){
  $('#filter').hide('slide');
  $('#hide_filter').hide('slide');
  $('#show_filter').show('slide');
});