// see http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
(function($,sr){
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
	// smartresize
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

function resize() {
  scrh = $(window).height();
  scrw = $(window).width();
  logoh = scrh / 12 + 30;
  logow = Math.max(200, scrw / 6);
  gidx = 0;
  lidx = 0;
  logos = 0.8;
  lcnt = parseInt(scrw / logow, 10);
  $.mobile.activePage.find(".logobar").html("");
  ticker_tape();
}
$(window).smartresize(resize);

function shuffle(o) {
  for (var j, x, i = o.length; i; j = parseInt(Math.random() * i, 10), x = o[--i], o[i] = o[j], o[j] = x);
  return o;
}

function init_sps() {
  shuffle(sps);
  for (var i = 1; i < sps.length; i++) {
    sps[i][0] = sps[i - 1][0] + sps[i][0];
  }
}

function choose_logo_idx() {
  var idx = -1;
  if (gidx < sps.length) idx = gidx;
  else {
    var upb = sps[sps.length - 1][0] + 1;
    var rdn = parseInt(Math.random() * upb, 10);
    for (var i = 0; i < sps.length; i++) {
      if (rdn <= sps[i][0] && sps[i][4] === 0) {
        idx = i;
        break;
      }
    }
    if (idx < 0) {
      for (var j = 0; j < sps.length; j++) {
        if (sps[j][4] === 0) {
          idx = j;
          break;
        }
      }
    }
  }
  sps[idx][4] = 1;
  gidx = gidx + 1;
  return idx;
}

function onfinish() {
  // If there are more pigeon-holes than pigeons.
  if (lcnt >= sps.length) return;

  var tid = lidx % lcnt;
  lidx += 1;
  var idx = choose_logo_idx();
  var oidx = parseInt($.mobile.activePage.find("#mylogo" + tid).attr("alt"), 10);
  $.mobile.activePage.find("#mylogo" + tid).fadeOut(500, function () {
    sps[oidx][4] = 0;
    $.mobile.activePage.find("#mylogo" + tid).attr("src", "images/" + sps[idx][1]);
    $.mobile.activePage.find("#mylogo" + tid).attr("alt", idx);
    $.mobile.activePage.find("#mylink" + tid).attr("href", sps[idx][2]);
    var divh = logos * logoh;
    var divw = logos * logow;
	var imgh = sps[idx][5];
    var imgw = sps[idx][6];

    if (divh / divw < imgh / imgw) {
      $.mobile.activePage.find("#mylogo" + tid).attr("height", divh + "px");
      $.mobile.activePage.find("#mylogo" + tid).removeAttr("width");
    } else {
      $.mobile.activePage.find("#mylogo" + tid).removeAttr("height");
      $.mobile.activePage.find("#mylogo" + tid).attr("width", divw + "px");
    }
    $.mobile.activePage.find("#mylogo" + tid).fadeIn(500);
  });

}

function get_logo(tid) {
  var idx = choose_logo_idx();
  var logoimg = "images/" + sps[idx][1];
  var goldenimg = "";
  var goldenimg_display = "None";
  if (sps[idx][0] >= 15) {
    goldenimg = "Gold";
    goldenimg_display = "block";
  }

  var divh = logos * logoh;
  var divw = logos * logow;
  var imgh = sps[idx][5];
  var imgw = sps[idx][6];

  var nlogo = "<td width='" + parseInt(100 / lcnt, 10) + "%'>" + "<a id='mylink" + tid + "' href='" + sps[idx][2] + "'>" + "<img id='mylogo" + tid + "' src='" + logoimg + "' alt='" + idx + "' style='display:block; margin:auto;' ";
  if (divh / divw < imgh / imgw) {
    nlogo = nlogo + " height='" + divh + "px'>";
  } else {
    nlogo = nlogo + " width='" + (divw - 10) + "px'>";
  }
  nlogo = nlogo + "</a></td>";
  return nlogo;
}

function ticker_tape() {
  $.mobile.activePage.find(".logobar").css("height", logoh + "px");
  $.mobile.activePage.find(".content").css("margin-bottom", 1.25*logoh + "px");
  $.mobile.activePage.find(".logobar").append("<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' valign='middle'><tr class='logobarrow'></tr></table>");
  for (var i = 0; i < lcnt; i++) {
    nlogo = get_logo(i);
    $.mobile.activePage.find(".logobarrow").append(nlogo);
  }
}

function showall(divname) {
  $.mobile.activePage.find(".newslibtn").find("span").toggleClass("ui-icon-plus");
  $.mobile.activePage.find(".newslibtn").find("span").toggleClass("ui-icon-minus");

  if ($.mobile.activePage.find(".newslibtn").siblings().slice(-1).css("display") == "none") {
	$.mobile.activePage.find(".newslibtn").siblings().show();
    $.mobile.activePage.find(".newslibtn").find("a").text("Hide Older News");
  } else {
	$.mobile.activePage.find(".newslibtn").siblings().slice(7).hide();
    $.mobile.activePage.find(".newslibtn").find("a").text("Older News");
  }
}

setInterval(function () {
  onfinish();
}, 3000);


// Toggle the logobar footer based on taphold rather than tap events.
$(document).on('pageinit','[data-role=page]', function(){
    $('[data-position=fixed]').fixedtoolbar({ tapToggle:false});
});
$(document).on('taphold', '[data-role=page]', function(){
    $('[data-position=fixed]').fixedtoolbar('toggle');
});

$(document).bind('pagebeforeshow', function(event){
	try
	{
		init_sps();
		resize();

		try {
		["a", "b", "c"].forEach(function(x){
			// hide all by default
			$.mobile.activePage.find(".subnav-" + x).hide();
			$.mobile.activePage.find(".navheader-" + x).click(
				function () {
					$.mobile.activePage.find(".navheader-" + x).toggleClass("headerselected");
					$(this).find("span").toggleClass("ui-icon-plus");
					$(this).find("span").toggleClass("ui-icon-minus");
					if ($.mobile.activePage.find(".subnav-" + x).css("display") == "none") {
						$.mobile.activePage.find(".subnav-" + x).show();
					} else {
						$.mobile.activePage.find(".subnav-" + x).hide();
					}

					// for the last menu (which right now is "c") handle the bottom corners
					if (x == "c") {
						if ($.mobile.activePage.find(".subnav-c").css("display") == "none") {
							$.mobile.activePage.find(".navheader-c").addClass("ui-corner-bottom");
						} else {
							$.mobile.activePage.find(".navheader-c").removeClass("ui-corner-bottom");
						}
					}
				}
			);

			// Expand the navigation menu if one of the links there is active
			if ($.mobile.activePage.find(".subnav-" + x + ".navselected").size()) {
				$.mobile.activePage.find(".navheader-" + x).click();
			}
		});
		}
		catch(err)
		{
			//alert(err);
		}

		// start out with the bottom menu closed -> need to add corners
		if ($.mobile.activePage.find(".subnav-c").css("display") == "none") {
			$.mobile.activePage.find(".navheader-c").addClass("ui-corner-bottom");
		}

		// Bind conference program buttons
		$.mobile.activePage.find("#prog_ctrl a").click(function() {
				// reset the search filter
				$('input[data-type="search"]').val("");
				$('input[data-type="search"]').trigger("change");

				var day = $(this).text();
				var hide = true;
				var re = new RegExp("^" + day, "i");
				var kids = $.mobile.activePage.find("#proglist").children();

				kids.each(function () {
					// if we're hitting a date divider, determine if we need to show or hide items
					if ($(this).text().match(re)) {
						// show the date divider and all following items
						hide = false;
					} else if (day == "All") {
						// this is a new date divider, hide it and all following items
						hide = false;
					} else if ($(this).text().match("Tuesday|Wednesday|Thursday")) {
						// this is a new date divider, hide it and all following items
						hide = true;
					}

					// show or hide the items
					if (hide) {
						$(this).addClass("ui-screen-hidden");
					} else {
						$(this).removeClass("ui-screen-hidden");
					}
				});
				$('input[data-type="search"]').trigger("change");
		});

		$.mobile.activePage.find("#archive_dbtn").click(function() {
			// Check the validity of the download code
			$.ajax({
				url: 'archive.php',
				data: { check: 1, code: $.mobile.activePage.find('#archive_code').val() },
				async: false,
				success: function(data) {
					valid = $.trim(data);
				}
			});

			// If the code is OK, start downloading; or give the error message!
			if (valid=="true") {
				$.mobile.activePage.find("#archive_info").css("color", "green");
				$.mobile.activePage.find("#archive_info").html("Success!");
				window.open('archive.php?check=0&code=' + $.mobile.activePage.find('#archive_code').val());
			}
			else {
				$.mobile.activePage.find("#archive_info").css("color", "red");
				$.mobile.activePage.find("#archive_info").html("Error!");
				return false;
			}
			// Click function ends
		});
	}
	catch(err)
	{
		//alert(err);
	}

});
