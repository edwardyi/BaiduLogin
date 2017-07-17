function checkFieldEmpty(obj){
	let msg = "";
	if(obj.val().trim()===""){
		 msg = obj.attr("hintMsg");
	}
	return msg;
}