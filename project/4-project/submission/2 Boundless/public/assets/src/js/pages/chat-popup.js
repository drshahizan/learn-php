//[chat popup Javascript]


$(function() {
  var INDEX = 0; 
  $("#chat-submit").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
      return false;
    }
    generate_message(msg, 'self');
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {
		
	var fake = [
	  'Did you purchase the template?'
	];
      generate_button_message(fake, 'user');  
    }, 1000)
    
  })
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <div class=\"d-flex align-items-center justify-content-end\">";  
    str += "          <div class=\"mx-10\">"; 
    str += "          <a href=\"#\" class=\"text-dark hover-primary font-weight-bold\">You";
    str += "          <\/a>";
    str += "          <p class=\"text-muted font-size-12 mb-0\">Just now";
    str += "          <\/p>";
    str += "          <\/div>";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"../../../images/avatar/3.jpg\"  class=\"avatar avatar-lg\">";
    str += "          <\/span>"; 
    str += "          <\/div>"; 
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  function generate_button_message(fake, buttons){    
   
    INDEX++;
    var str="";
	str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";    
    str += "          <div class=\"d-flex align-items-center\">";  
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"../../../images/avatar/2.jpg\"  class=\"avatar avatar-lg\">";
    str += "          <\/span>";
    str += "          <div class=\"mx-10\">"; 
    str += "          <a href=\"#\" class=\"text-dark hover-primary font-weight-bold\">Mayra Sibley";
    str += "          <\/a>";
    str += "          <p class=\"text-muted font-size-12 mb-0\">Just now";
    str += "          <\/p>";
    str += "          <\/div>"; 
    str += "          <\/div>"; 
    str += "          <div class=\"cm-msg-text\">";
    str += fake;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'user'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000); 
	
  }
  
      $(document).delegate(".chat-btn", "click", function() {
        var value = $(this).attr("chat-value");
        var name = $(this).html();
        $("#chat-input").attr("disabled", false);
        generate_message(name, 'self');
      })

    }); // End of use strict