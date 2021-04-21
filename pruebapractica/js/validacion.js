function validacionItem(){ //check if username is not empty and sends data to checkuser
	item = document.getElementById('item').value;
	if (item == ""){
		$("#message_item").html("el item es necesario");
	}else{
		checkItem_available(item);
	}
}

function checkItem_available(objeto) { //find if the username exists
	return $.ajax({ //ajax
		url: "db/comprobacionItem.php", //database retrieve data
		data: {item:objeto}, //the username
		type: "POST",

		success: function(answer){ 
			if (answer == "available"){ 
				$("#message_item").html("");
				document.getElementById('itemControl').value = "true";
			}else{ //if not available
				$("#message_item").html("el item ya existe"); //shows error message
				document.getElementById('itemControl').value = "false";
			}
		},
		error:function (){
		}
	});
}

//check if password is empty an shows an error
function validacionStock(){
	var stock = document.getElementById("stock").value;
	if (stock == "") {
		document.getElementById("message_stock").innerHTML = "el stock es necesario";
        document.getElementById('stockControl').value = "false";
	}else{
		document.getElementById("message_stock").innerHTML = "";
        document.getElementById('stockControl').value = "true";
	}
}

//check the fields and return true or false. If true, the form will be submitted
function validacionDatos() {
	var item = document.getElementById('itemControl').value;
	var stock = document.getElementById('stockControl').value;

	if (item == "true" && stock == "true"){
		return true;
	}else {
		alert("Errores en los campos!!!")
		return false;
	}
}