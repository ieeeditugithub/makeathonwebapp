var catjs={
init:function(){
console.log("catjs");
	console.log("hi");
$("#state").change(function () {
	console.log('state')
    var id = $("#state :selected").attr('value');
	console.log('category'+id)
	catjs.getcat(id);
	
});


$( "#state" ).trigger( "change" );

},
getcat:function(id){
console.log(id);


$.ajax({
        url: 'ed_state.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:catjs.getcatCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getcatCallback:function(data, status){
	//console.log(data);
//	console.log(status);
	$("#data").html(data)
	
	
}




}

$("document").ready(function(){

catjs.init();	
	
});