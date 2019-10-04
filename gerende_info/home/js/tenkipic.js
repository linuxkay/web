$(function(){
	$.getJSON("http://gerendevil.dip.jp/cache/tenkipic.json", function(data){
	//	$(data.result).each(function(){
		 var entries = data.result
        $.each(entries, function(index,entry) {
                var name = this.name
            	var pic = this.pic
	$('span.'+this.name.replace(/\s+/g, '-')
                .toLowerCase()+'-pic').replaceWith(this.pic);
		})
	})
	
});
