function checkFieldEmpty(obj){
	let msg = "";
	if("undefined" === typeof obj){
		if(obj.val().trim()===""){
			 msg = obj.attr("hintMsg");
		}	
	}
	return msg;
}