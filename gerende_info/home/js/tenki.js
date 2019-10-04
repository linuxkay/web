$(function(){
	$.getJSON("http://gerendevil.dip.jp/cache/tenki.json", function(data){
	//	$(data.result).each(function(){
		 var entries = data.result
        $.each(entries, function(index,entry) {
                var name = this.name
            	var weather = this.weather
	$('span.'+this.name.replace(/\s+/g, '-')
                .toLowerCase()+'-weather').replaceWith(this.weather);
		})
	})
	
});
