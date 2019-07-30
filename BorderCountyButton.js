function borderCountyToggle(theElement){
     //if theElement is not displayed, this makes it visible and unchecks the standardA radio button
    if (theElement.style.display === "none"){
        theElement.style.display = "";
        document.getElementById('standardA686').checked = false;
    }
        //Or it hides the display and checks the standardA radio button 
    else{
        theElement.style.display = "none";
        document.getElementById('standardA686').checked = true;
    }

}

//runs the function
function borderCountyClick(){
    borderCountyToggle(document.getElementById('row686'));
}