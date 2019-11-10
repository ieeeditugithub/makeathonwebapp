var story={
init:function(){
console.log("story");
/*i$("#title_q").on('input', function () {
    var val = this.value;
    f($('#browsers').find('option').filter(function(){
        return this.value.toUpperCase() === val.toUpperCase();        
    }).length) {
        //send ajax request
      //  alert(val);
    }
});	*/
$("#title_q").on('input', function () {
	console.log('title_q')
	//alert($( "#browsers :selected" ).val());
    var id = this.value;
	console.log('title_q'+id)
	story.getsaga(id);
	//alert(id);
});


$( "#title_q" ).trigger( "click" );

},
getsaga:function(id){
console.log(id);


$.ajax({
        url: 'get_story.php',
        type: 'POST',
        data: {'title':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:story.getsagaCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getsagaCallback:function(data, status){
	//console.log(data);
//	console.log(status);
	$("#template").html(data)
	
	
}




}

$("document").ready(function(){
//console.log('hi')
story.init();	
	
});