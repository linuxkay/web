$(function(){
	$("table.tbl tbody").html("");
	$.getJSON("http://gerendevil.dip.jp/cache/result.json", function(data){
	//	$(data.result).each(function(){
		 var entries = data.result
        $.each(entries, function(index,entry) {
                var name = this.name
            	var currently = this.currently
	$('span.'+this.name.replace(/\s+/g, '-')
                .toLowerCase()+'-currently').replaceWith(this.currently);
			$('<tr>'+
			  '<th>'+this.name+'</th>'+
			  '<td class="name"><span class="' + this.name + '">' + this.currently + '</span></td>'+
			  '<td><a href="' + this.name + '" target="' + this.currently + '">' + this.name + '</a></td>'+
		'</tr>').appendTo('table.tbl tbody');
		})
	})
	
});
