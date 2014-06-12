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
    minLength: 1      
});

$('#projectCabinetNo').autocomplete({
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
    minLength: 1      
});

$('#reportCabinetNo').autocomplete({
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
    minLength: 1      
});

$('#employee').autocomplete({
    source: function( request, response ) {
        $.ajax({
            url : 'search.php',
            dataType: "json",
          data: {
             name_startsWith: request.term,
             type: 'employee'
          },
           success: function( data ) {
               response( $.map( data, function( item ) {
                  strsplit = item.split("(");
                  idNo = strsplit[1];
                  idNo = idNo.substring(0, idNo.length-1)
                  return {
                      label: item,
                      value: idNo
                  }
              }));
          }
        });
    },
    autoFocus: true,
    minLength: 1      
});

$('#reportedTo').autocomplete({
    source: function( request, response ) {
        $.ajax({
            url : 'search.php',
            dataType: "json",
          data: {
             name_startsWith: request.term,
             type: 'employee'
          },
           success: function( data ) {
               response( $.map( data, function( item ) {
                  strsplit = item.split("(");
                  idNo = strsplit[1];
                  idNo = idNo.substring(0, idNo.length-1)
                  return {
                      label: item,
                      value: idNo
                  }
              }));
          }
        });
    },
    autoFocus: true,
    minLength: 1      
});

$('#projectNodeName').autocomplete({
    source: function( request, response ) {
        $.ajax({
            url : 'search.php',
            dataType: "json",
          data: {
             name_startsWith: request.term,
             type: 'nodeName'
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
    minLength: 1      
});

$('#reportNodeName').autocomplete({
    source: function( request, response ) {
        $.ajax({
            url : 'search.php',
            dataType: "json",
          data: {
             name_startsWith: request.term,
             type: 'nodeName'
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
    minLength: 1      
});