var getitle={
init:function(){
console.log("getitle");
	
$("#series_q").change(function () {
	console.log('series')
    var id = $("#series_q :selected").attr('value');
	console.log('series_q'+id)
	getitle.getsaga(id);
	
});


$( "#series_q" ).trigger( "change" );

},
getsaga:function(id){
console.log(id);


$.ajax({
        url: 'get_title.php',
        type: 'POST',
        data: {'series_q':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:getitle.getsagaCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getsagaCallback:function(data, status){
	//console.log(data);
//	console.log(status);
	$("#title_q").html(data)
	
	
}




}

$("document").ready(function(){

getitle.init();	
	
});