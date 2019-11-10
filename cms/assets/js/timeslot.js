var timejs={
init:function(){
console.log("timejs");

$("#time").change(function () {
	//console.log('material')
    var id = $("#time :selected").attr('value');
	console.log('time slot id : '+id)
	timejs.gettime(id);
	
});


$( "#time" ).trigger( "change" );

},
gettime:function(id){
console.log(id);


$.ajax({
        url: 'ed_time.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:timejs.getcatCallback ,
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

timejs.init();	
	
});