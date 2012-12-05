function checkAll(source){
	checkboxes = document.getElementsByName('ch');
	for(var i in checkboxes)
		checkboxes[i].checked = source.checked;
}