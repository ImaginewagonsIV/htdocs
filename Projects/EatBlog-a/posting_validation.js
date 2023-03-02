//File attached required for posting
function validatePicture() {
    if(document.getElementById("inputTag").files.length == 0 ){
        alert('No Files Selected');
    }
}

function validateTitle() {
	if (document.getElementID("txt-Title").value == "" || "Title") {
		alert('Title Required');
	}
}