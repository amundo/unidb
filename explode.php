<!doctype html>
<html>
<head>
  <title>your word a splode</title>
  <link type="text/css" href="style.css" rel="stylesheet" />
  <meta charset="UTF-8">
  <script src="jquery.js"></script>
<script>

function explode_word(word){
  return word.split('');
}

$(function(){

 $('#explode').click(function(e){

   var word = $('#word').val();
   var letters = explode_word(word);
   for(var i=0;i<letters.length;i++){ 
     $('ol').append('<li>' + letters[i] + '</li>')
   }
    
 })  

})

</script>
</head>
<body>
<input id="word" type="text" value="अन्तराष्ट्रिय" />
<button id="explode">your word a splode</button>


<ol id="letters">

</ol>

</body>

</html>

