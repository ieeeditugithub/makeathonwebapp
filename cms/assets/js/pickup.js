var pickupjs={
init:function(){
	var max=$("#page").attr('data-max');

console.log("pickupjs");
console.log("max-value: "+max);
	console.log("hi");
$("#page").change(function () {
	//console.log('material')
    page=Number($(this).val())	
	if(page>0&&page<max+1){
	//	console.log('page '+page>0&&page<max+1)
		pickupjs.chng(page);}
	
	if(page>max)
	$(this).val(max)
	
	else if(page<1)
	$(this).val(1)
});


$( "#page" ).trigger( "change" );


$(".chng").click(function () {
	//console.log('material')
	var page=Number($("#page").val())
	var chng=Number($(this).val())
	page= page+chng 
	
	if(page<2)
		$("#pre").attr('disabled','disabled')
	else
		$("#pre").removeAttr('disabled','disabled')
	
		if(page>max-1)
		$("#nxt").attr('disabled','disabled')
	else
		$("#nxt").removeAttr('disabled','disabled')
	
	if(page>0&&page<max+1){
	 $("#page" ).val(page)
	pickupjs.chng(page);}
});

},
getentry:function(id){
console.log(id);


$.ajax({
        url: 'pickup_entry.php',
        type: 'POST',
        data: {'page':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:pickupjs.getcatCallback ,
        error: function () {
            //your error code
        }
    }); 




},

chng:function(page)
{
//var page = $("#page").attr('value');
	console.log('page no : '+page)
	pickupjs.getentry(page);	
},
getcatCallback:function(data, status){
	console.log(data);
//	console.log(status);
	$("#data").html(data)
	
	
}




}

$("document").ready(function(){

pickupjs.init();	
	
});