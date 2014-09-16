function breadcrumb(target){
	var location = window.location.href.split('#')[0];
	$(target).each(function(){
		if(this.href == location){
			$(this).addClass('bc');
		}
	});
}
function init_search(srch_val){
	$('#search').blur(function(){
		if($('#search').val() == ''){
			$('#search').val(srch_val);
		}
	});
	$('#search').focus(function(){
		if($('#search').val() == srch_val){
			$('#search').val('');
		}
	});
}
$(document).ready(function(){
	// breadcrumb('ul.menu a');
	init_search('Search');
});
