"use strict"; // Tabs navigation

var total = document.querySelectorAll('.nav-pills');
total.forEach(function (item, i) {
  item.onmouseover = function (event) {
    var target = getEventTarget(event);
    var li = target.closest('li'); // get reference

    if (li) {
      var nodes = Array.from(li.closest('ul').children); // get array

      var index = nodes.indexOf(li) + 1;

      item.querySelector('li:nth-child(' + index + ') .nav-link').onclick = function () {
        var tab_name = $(this).attr('data-name');
        var tab_variable = $(this).attr('get-variable');
        var tab_variable = tab_variable.length > 0 ? tab_variable : '';

        if (tab_name.length > 0) {
          change_bg();
          changeURL(tab_name, tab_variable); 
          
          // change tab_inpu on search form
          if ($('#tab_input').length > 0) {
            $('#tab_input').val(tab_name);
          }
        }
        

      };
    }
  };
}); 

function getEventTarget(e) {
  e = e || window.event;
  return e.target || e.srcElement;
} 

// End tabs navigation
// helper funcions
function change_bg() {
  var tab_ul_id = arguments.length > 0 && arguments[0] !== undefined && arguments[0] != '' ? arguments[0] : 'pills-tab';
  $('#' + tab_ul_id + ' > li').removeClass('article_active');
  $('#' + tab_ul_id + ' > li > a.active').parent().addClass('article_active');
}

$('#searchInp').keyup(function(e){
  console.log("hello");
  var search_val = e.target.value;
  var data = {'form_type': 'search_client', 'user': search_val};

  if (search_val.length > 1){
    postCheck('search_res', data, 0);
  }
});
