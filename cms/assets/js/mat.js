var matjs={
init:function(){
console.log("matjs");
	console.log("hi");
$("#mat").change(function () {
	//console.log('material')
    var id = $("#mat :selected").attr('value');
	console.log('material : '+id)
	matjs.getmat(id);
	
});


$( "#mat" ).trigger( "change" );

},
getmat:function(id){
console.log(id);


$.ajax({
        url: 'ed_material.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:matjs.getcatCallback ,
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

matjs.init();	
	
});