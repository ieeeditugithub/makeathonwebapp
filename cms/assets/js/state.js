var event_js={
init:function(){
console.log("event_js");
	
$("#event_id").change(function () {
	console.log('event_id')
    var id = $("#event_id :selected").attr('value');
	console.log('event_id'+id)
	event_js.getsaga(id);
	
});


$( "#event_id" ).trigger( "change" );

},
getsaga:function(id){
console.log(id);


$.ajax({
        url: 'ed_event.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:event_js.getcatCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getcatCallback:function(data, status){
	console.log(data);
//	console.log(status);
	$("#data").html(data)
	
	
}




}

$("document").ready(function(){

event_js.init();	
	
});