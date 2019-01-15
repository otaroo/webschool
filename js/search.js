




jQuery.expr[":"].containsNoCase = function(el, i, m) {
             var search = m[2];
             if (!search) return false;
             return eval("/" + search + "/i").test($(el).text());
         };
     
         jQuery(document).ready(function() {
           getPation();

             // used for the first example in the blog post
           //  jQuery('li:contains(\'DotNetNuke\')').css('color', '#0000ff').css('font-weight', 'bold');
  
             // hide the cancel search image
             jQuery('#imgSearch').hide();
  
             // reset the search when the cancel image is clicked
             jQuery('#imgSearch').click(function() {
                 resetSearch();
             });
  
             // cancel the search if the user presses the ESC key
             jQuery('#txtSearch').keyup(function(event) {
                 if (event.keyCode == 27) {
                     resetSearch();
                 }
             });
                 
              // execute the search
              jQuery('#txtSearch').keyup(function() {
                  // only search when there are 3 or more characters in the textbox
                  if (jQuery('#txtSearch').val().length > 1) {
                      // hide all rows
                      jQuery('#tblSearch tr').hide();
                      // show the header row
                      jQuery('#tblSearch tr:first').show();
                      // show the matching rows (using the containsNoCase from Rick Strahl)
                      jQuery('#tblSearch tr td:containsNoCase(\'' + jQuery('#txtSearch').val() + '\')').parent().show();
                      // show the cancel search image
                      jQuery('#imgSearch').show();
                   }
                   else if (jQuery('#txtSearch').val().length == 0) {
                       // if the user removed all of the text, reset the search
                       resetSearch();
                   }
    
                   // if there were no matching rows, tell the user
                   if (jQuery('#tblSearch tr:visible').length == 1) {
                       // remove the norecords row if it already exists
                       jQuery('.norecords').remove();
                      // add the norecords row
                      jQuery('#tblSearch').append('<tr class="norecords"><td colspan="6" class="Normal">ไม่พบข้อมูล</td></tr>');
                  }
              });
         });
   
          function resetSearch() {
              // clear the textbox
              jQuery('#txtSearch').val('');
              // show all table rows
              jQuery('#tblSearch tr').show();
              // remove any no records rows
              jQuery('.norecords').remove();
              // remove the cancel search image
              jQuery('#imgSearch').hide();
              // make sure we re-focus on the textbox for usability
             jQuery('#txtSearch').focus();
             $(".pager").hide();
              getPation();
         }
 ////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////Pagation ///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////  
function getPation(){
   $('.tblSearch').each(function() {
    var currentPage = 0;
    var numPerPage = 15 ;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
   var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    //$pager.insertAfter($table).find('span.page-number:first').addClass('active');
  $('.datagrid').after("<br><br>",$pager);
  $('.pager').find('span.page-number:first').addClass('active');
}); 
} 