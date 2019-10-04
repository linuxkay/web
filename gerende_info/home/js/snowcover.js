$(function(){
	$.getJSON("http://gerendevil.dip.jp/cache/snowcover.json", function(data){
	//	$(data.result).each(function(){
		 var entries = data.result
        $.each(entries, function(index,entry) {
                var name = this.name
            	var snowcover = this.snowcover
	$('span.'+this.name.replace(/\s+/g, '-')
                .toLowerCase()+'-snowcover').replaceWith(this.snowcover);
		})
	})
	
});
