<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<script type="text/javascript" src="jquery.js"></script>
<script>
  $(function(){

    $('button').click(function(){

      var query = $('input#query').val();
      if(query.length > 0){
        $.getJSON(
          'unicode.php',
          { 'query':  query},
          callback
        ) 
      }

      return false;
    }) // button.click


  })

  function display(letter){
    var html = '<div class="letter">'+
               '<p>U+'+letter.codepoint+'</p>'+
               '<h1>&#x'+
               letter.codepoint+
               ';</h1><strong>'+
                letter.name +
               '</strong><div>'
    return html
  }

  function callback(data){
    if(data.length == 0){
      $('#letter').html('<h1>☠ Sorry, no results. ☠</h1>');
    } else { 
      $('#letter').html('');
    }
    $.each(data, function(i,letter){
      $('#letter').append(display(letter));
    })
  }

</script>
  <link type="text/css" href="style.css" rel="stylesheet" />
</head>
<body>

<div id="header">
<form action="unicode.php" method="get">
<input name="query" id="query" type="text" />
<br /><button>lookup</button>
</form>
</div>

<div id="content">
<div id="letter"></div>
</div>


</body>

</html>

