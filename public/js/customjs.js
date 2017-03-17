document.writeln("<script type='text/javascript' src='app.js'></script>");
document.writeln("<script type='text/javascript' src='/../jquery/jquery-3.1.1.min.js'></script>");



$(document).ready(function(){	

	$("#department").change(function(){
  		var collegeid=$("#collegeid").val();
  		var department=$("#department").val();
    	var departmentcode=collegeid+"_"+department;
    		$.ajax({
        		url:"/getsem",
        		data: {departmentcode : departmentcode},
        		success : function(result){
           		$("#sem").html(result);
        	}});

        
	}); 

	$("#sem").change(function(){
  		var collegeid=$("#collegeid").val();
  		var department=$("#department").val();
    	var departmentcode=collegeid+"_"+department;
    	var semester=$("#sem").val();
    		$.ajax({
        		url:"/getsubject",
        		data: {departmentcode : departmentcode,
        				semester	  : semester
        		},
        		success : function(result){
           		$("#subject").html(result);
        	}});
	}); 








 

});