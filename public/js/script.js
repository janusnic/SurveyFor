$(document).ready(function(){
	$(document).on('click','.delete-option',function(){
		$(this).parent(".input-g").remove();
	});
	$(document).on('click','.add-option',function(){
		var txt = '<div class="input-group input-g">' +
		            '<span class="input-group-addon button-click delete-option">Delete</span>'+
		            '<input type="text" class="form-control" name="option_name[]" placeholder="Enter option">'+
		            '<span class="input-group-addon button-click add-option">Add another option</span>'+
		          '</div>';
		$(".form-g").append(txt);
	});
	$(document).on('change','#question_type',function(){
		var selected_option = $('#question_type :selected').text();
		if(selected_option == "Radio Button" || selected_option == "Checkbox"){

			var txt = '<div class="input-group input-g">' +
		            '<span class="input-group-addon button-click delete-option">Delete</span>'+
		            '<input type="text" class="form-control" name="option_name[]" placeholder="Enter option">'+
		            '<span class="input-group-addon button-click add-option">Add another option</span>'+
		          '</div>';
			$(".form-g").html(txt);
		}else{
			$(".input-g").remove();
		}
	});
	$(document).on('click','.chart',function(){
		var get_data = $(this).attr('data-chart');
		get_data = $.parseJSON(get_data); 
		//Get context with jQuery - using jQuery's .get() method.
		var ctx = $("#myChart").get(0).getContext("2d");
		//This will get the first returned node in the jQuery collection.
        var myNewChart = new Chart(ctx).Pie(get_data);
	});
});
