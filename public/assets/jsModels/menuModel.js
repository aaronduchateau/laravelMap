window.menu = {
	fetchCounties: function(indexTracker, callback){
		$.ajax({
            url:'../listCounties/' + indexTracker,
            dataType:'json',
            success:function(data){
                callback(data);
            }
        });
	}
};