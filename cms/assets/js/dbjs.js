var dbjs={
init:function(){
console.log("dbjs");
	
$("#series").change(function () {
	console.log('series')
    var id = $("#series :selected").attr('value');
	console.log('series'+id)
	dbjs.getsaga(id);
	
});


$( "#series" ).trigger( "change" );

},
getsaga:function(id){
console.log(id);


$.ajax({
        url: 'getsaga.php',
        type: 'POST',
        data: {'series':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:dbjs.getsagaCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getsagaCallback:function(data, status){
	//console.log(data);
//	console.log(status);
	$("#saga").html(data)
	
	
}




}

$("document").ready(function(){

dbjs.init();	
	
});