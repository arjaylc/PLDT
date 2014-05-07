 function split( val ) {
return val.split( /,\s*/ );
}
function extractLast( term ) {
return split( term ).pop();
}

$('#cabinetNo').autocomplete({
  source: function( request, response ) {
    $.ajax({
        url : 'search.php',
        dataType: "json",
      data: {
         name_startsWith: request.term,
         type: 'cabinetNo'
      },
       success: function( data ) {
           response( $.map( data, function( item ) {
              return {
                  label: item,
                  value: item
              }
          }));
      }
    });
  },
  autoFocus: true,
  minLength: 1,
  focus: true    
});