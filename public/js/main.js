(function(root){
  var api = "http://" + window.location.host + "/api/v1/bugs/";
  $(".bug-details-link").on("click", function(event) {
    event.preventDefault();
    $("#bug-details").html('<div class="loader"><img src="images/ajax-loader.gif"></div>');
    var bugId = $(this).attr("data-id");
    var url = api + bugId;

    $.get(url, function(data) {

      var bugDetails = '<h4 class="centered">Ticket Details</h4>';
      bugDetails += '<ul class="bug-details-list">';
      bugDetails += '<li><span class="label">Bug Number:</span> '+data["bug_number"]+'</li>';
      bugDetails += '<li><span class="label">Subject:</span> '+ data["name"] +'</li>';
      bugDetails += '<li><span class="label">Priority:</span> '+ data["priority"] + '</li>';
      bugDetails += '<li><span class="label">Status:</span> '+ data["status"] +'</li>';
      bugDetails += '<li><span class="label">Type:</span> '+ data["type"] +'</li>';
      bugDetails += '<li><span class="label">Category:</span> '+ data["product_category"] +'</li>';
      bugDetails += '<li><span class="label">Created By:</span> '+ data["created_by_name"] +'</li>';
      bugDetails += '<li><span class="label">Assigned To:</span> '+ data["assigned_user_name"] +'</li>';
      bugDetails += '<li><span class="label">Resolution:</span> '+ data["resolution"] +'</li>';
      bugDetails += '<li><span class="label">Description:</span> '+ data["description"] +'</li>';
      bugDetails += '</ul>';

      $("#bug-details").html(bugDetails);
    });
  });

})(this);