

function delete_position(url, ask){
	if(confirm(ask)){
		location.href=url;
	}else{
		return false;
	}
	
}

