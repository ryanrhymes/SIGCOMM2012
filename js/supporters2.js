function resize() {
  scrh = $(window).height();
  scrw = $(window).width();
  logoh = scrh / 12 + 30;
  logow = Math.max(200, scrw / 6);
  gidx = 0;
  lidx = 0;
  logos = 0.8;
  lcnt = parseInt(scrw / logow, 10);
  $("#logobar").html("");
  $("#jqm-home").css("padding-bottom", logoh + 10 + "px");
  ticker_tape();
}
$(window).resize(resize);

$(document).on("pagebeforeshow", function() {
  // pad the content div so we have room for the logo footer
  $(".content").css("margin-bottom", 1.5*logoh + "px");
});

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
  var oidx = parseInt($("#mylogo" + tid).attr("alt"), 10);
  $("#mylogo" + tid).fadeOut(500, function () {
    sps[oidx][4] = 0;
    $("#mylogo" + tid).attr("src", "images/" + sps[idx][1]);
    $("#mylogo" + tid).attr("alt", idx);
    $("#mylink" + tid).attr("href", sps[idx][2]);
    var divh = logos * logoh;
    var divw = logos * logow;
	var imgh = sps[idx][5];
    var imgw = sps[idx][6];

    if (divh / divw < imgh / imgw) {
      $("#mylogo" + tid).attr("height", divh + "px");
      $("#mylogo" + tid).removeAttr("width");
    } else {
      $("#mylogo" + tid).removeAttr("height");
      $("#mylogo" + tid).attr("width", divw + "px");
    }
    $("#mylogo" + tid).fadeIn(500);
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
  $("#logobar").css("height", logoh + "px");
  $("#content").css("margin-bottom", 1.5*logoh + "px");
  $("#logobar").append("<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' valign='middle'><tr id='logobarrow'></tr></table>");
  for (var i = 0; i < lcnt; i++) {
    nlogo = get_logo(i);
    $("#logobarrow").append(nlogo);
  }
}

function showall(divname) {
  $(".newslibtn").find("span").toggleClass("ui-icon-plus");
  $(".newslibtn").find("span").toggleClass("ui-icon-minus");
  if ($(".newsli").css("display") == "none") {
    $(".newsli").css("display", "block");
    $(".newslibtn").find("a").text("Hide Older News");
  } else {
    $(".newsli").css("display", "none");
    $(".newslibtn").find("a").text("Older News");
  }
}

setInterval(function () {
  onfinish();
}, 3000);

$(document).bind('pageinit', function(event){
	try
	{
		init_sps();
		resize();
		
		$(".subnavlist").addClass("ui-corner-bottom");
		$(".subnavlist").click(
			function() {
				//$(".subnavlist").addClass("page-now");
				$(".subnavlist").find("span").toggleClass("ui-icon-plus");
				$(".subnavlist").find("span").toggleClass("ui-icon-minus");
				if( $(".subnavlink").css("display") == "none" )
				{
					$(".subnavlink").css("display", "block");
					$(".subnavlist").removeClass("ui-corner-bottom");
				}
				else
				{
					$(".subnavlink").css("display", "none");
					$(".subnavlist").addClass("ui-corner-bottom");
				}
			}
		);
		
		// Google
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
		
		// Bind conf prog btn
		$("#prog_ctrl a").click(
			function() {
				if(this.id !=0 )
				{
					$(".prog_tbl").hide();
					tid = "#prog_tbl_" + this.id;
					$(tid).show("fast");
				}
				else
				{
					$(".prog_tbl").show("fast");
				}
			}
		);
		
	}
	catch(err)
	{
		//alert(err);
	}

});

// Don't show logobar on supporter page
$(document).bind('pagebeforeshow', function(event){
		if ($("title").html().match("^Supporters .*")) {
			$("#logobar").hide();
		} else {
			$("#logobar").show();
		}
});