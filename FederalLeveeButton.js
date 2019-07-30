function federalLeveeToggle(theElement){
    //if theElement is not displayed, this makes it visible and unchecks the standardA radio button
    if (theElement.style.display === "none"){
    theElement.style.display = "";
    document.getElementById('standardA687').checked = false;

}
    //Or it hides the display and checks the standardA radio button 
else{
    theElement.style.display="none";
    document.getElementById('standardA687').checked = true;
}

}

//runs the function
function federalLeveeClick(){
    federalLeveeToggle(document.getElementById('row687'));


}