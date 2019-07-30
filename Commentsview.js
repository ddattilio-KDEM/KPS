//this function (onLoad) builds the 3 digit number string so we can append it to 'comments' to automate getting the id(s) of our comments fields
function onLoad(){
    for (i= 1; i<= NumStand; i++){
       var iString = i.toString();
                if (iString.length == 3){
                    iString = "" + iString;
                    }
                    
                    else if (iString.length == 2) {
                        iString = "0" + iString;
                               }

                else if (iString.length == 1) {
                    iString = "00" + iString;
                         }   
    var commentsField = 'comments' + iString;
  
  hideComment(commentsField);
  var tribal = document.getElementById('row039');
  tribal.style.display="none"
  
   

  }
}

//this function hides all off the comments fields (and outputs the comments strings to the console to make debugging easier)
function hideComment(commentsField ){
	console.log(commentsField);
  var comments = document.getElementById(commentsField);
	comments.style.visibility="hidden";
	

}

/*this function takes only the last 3 characters of the commentsID string and appends them to 'comments', 
then it reveals the corresponding comments field (when the incomplete radio button is checked)*/
function standardIOnChange(changed_id){
console.log(changed_id);
var foundNumber = changed_id.slice(-3);
console.log(foundNumber);
document.getElementById('comments'+ foundNumber).style.visibility = "visible";

}

//same thing as the function before but instead it hides the comments field when accepted radio button is checked
function standardAOnChange(changed_id){
console.log(changed_id);
var foundNumber = changed_id.slice(-3);
console.log(foundNumber);
document.getElementById('comments' + foundNumber).style.visibility = "hidden";

}