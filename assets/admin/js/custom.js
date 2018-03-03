$(document).ready(function()
{
	// klik menu load ajax
	$(document).on("click","a.ajaxload",function(e)
	{
		var location = $(this).attr("href");
		var alt      = $(this).attr("alt");
		if(!alt)
		{
			alt = "GNBT Admin";
		}

		$("#content_body").html("loading...");
		$.post( location, { load_template: "false" } ).done(function( data ) 
		{
		    $("#content_body").html(data);
		    // update url baru
			var state = {"thisIsOnPopState": true};
			document.title = alt;
			history.pushState(state, alt, location);
		});

		return false ; 
	});

	// klik menu load ajax-tree
	$(document).on("click","a.ajaxload-tree",function(e)
	{
		var location 	= $(this).attr("href");

		$("#content_body").html("loading...");
		$.post( location, { load_template: "false" } ).done(function( data ) 
		{
			alt = "title cuy";
		    $("#content_body").html(data);
		    $("#content_body").html(data);
		    // update url baru
			var state = {"thisIsOnPopState": true};
			document.title = alt;
			history.pushState(state, "tes", location);
		});

		return false ; 
	});

});



// fungsi load modal
function load_modal (settings) {
 	if ( settings.header == undefined ) 
	{
		header = "Dialog box GNBTT Admin";
	}
	else
	{
		header = settings.header;
	}

	if ( settings.size == undefined ) 
	{
		size = "";
	}
	else
	{
		size = settings.size;
	}

	if ( settings.content == undefined && settings.url == undefined ) 
	{
		content = "<div class='modal-body'>Data not found.</div>";
	}
	else if( settings.content == undefined && settings.url != undefined ) 
	{
		content = "<div class='modal-body'>Loading...</div>";
	}
	else
	{
		content = settings.content;
	}

	if ( settings.url == undefined ) 
	{
		url = "";
	}
	else
	{
		url = settings.url;
	}

	// sembunyiin semua modal
	$('#myModal').modal('hide');
	//nampilin modal
	$("body").prepend("<div id='myModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog "+size+"' role='document'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button> <h4 class='modal-title' id='myModalLabel'>"+header+"</h4></div><div id='isi_modal'>"+content+"</div></div></div></div>");
	$('#myModal').modal('show');

	// jika ada url
	if ( settings.url != undefined ) 
	{
		$("#isi_modal").load(settings.url,function(response , status,xhr)
		{
			if ( status == "error" ) 
			{
				var msg = "<div class='modal-body'>Sorry but there was an error: ";
				$("#isi_modal").html(msg + xhr.status + " " + xhr.statusText + "</div>");
			}
		});
	}
};


// modal upload
// fungsi load modal
function modal_media (settings) {
 	if ( settings.header == undefined ) 
	{
		header = "Dialog box GNBTT Admin";
	}
	else
	{
		header = settings.header;
	}

	if ( settings.size == undefined ) 
	{
		size = "";
	}
	else
	{
		size = settings.size;
	}

	if ( settings.content == undefined ) 
	{
		content = "<div class='modal-body'>Loading...</div>";
	}
	else
	{
		content = settings.content;
	}

	if ( settings.url == undefined ) 
	{
		url = "";
	}
	else
	{
		url = settings.url;
	}

	// sembunyiin semua modal
	$('#myModal').modal('hide');
	//nampilin modal
	$("body").prepend("<div id='myModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog "+size+"' role='document'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button> <h4 class='modal-title' id='myModalLabel'>"+header+"</h4></div><div id='luar_modal'><div id='isi_modal'>"+content+"</div></div></div></div></div>");
	$('#myModal').modal('show');

	// jika ada url
	if ( settings.url != undefined ) 
	{
		$("#isi_modal").load(settings.url,function(response , status,xhr)
		{
			if ( status == "error" ) 
			{
				var msg = "<div class='modal-body'>Sorry but there was an error: ";
				$("#isi_modal").html(msg + xhr.status + " " + xhr.statusText + "</div>");
			}
			else{
				if ( settings.act != undefined ) 
				{
					$("#jvs").append(settings.act);
				}				
			}
		});
	}
};


function modal_close () {
	$('#myModal').modal('hide');
}


// untuk filter karakter inputan
function getkey(e){
	if (window.event)
	   return window.event.keyCode;
	else if (e)
	   return e.which;
	else
	   return null;
}
function goodchars(e, goods, field){
	  var key, keychar;
	  key = getkey(e);
	  if (key == null) return true;
	   
	  keychar = String.fromCharCode(key);
	  keychar = keychar.toLowerCase();
	  goods = goods.toLowerCase();
	   
	  // check goodkeys
	  if (goods.indexOf(keychar) != -1)
	      return true;
	  // control keys
	  if ( key==null || key==0 || key==8 || key==9 || key==27 )
	     return true;
	      
	  if (key == 13) {
	      var i;
	      for (i = 0; i < field.form.elements.length; i++)
	          if (field == field.form.elements[i])
	              break;
	      i = (i + 1) % field.form.elements.length;
	      field.form.elements[i].focus();
	      return false;
	      };
	  // else return false
	  return false;
}
