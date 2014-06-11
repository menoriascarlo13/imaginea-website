$(document).ready(function() {

	var speed = 3500;
	var autoScroll = setInterval(function() { scrolling(true);
	}, speed);
	$('#carousel_ul, #right_scroll, .filter').hover(function() {
		clearInterval(autoScroll);
	}, function() {
		autoScroll = setInterval(function() { scrolling(true);
		}, speed);
	});
	function scrolling(right) {
		var item_width = $('#carousel_ul li').outerWidth();
		if(right) {
			item_width = item_width * -1;
		}
		var left_indent =    parseInt($('#carousel_ul').css('left')) - item_width;

		$('#carousel_ul:not(:animated)').animate({
			'left' : left_indent
		}, 400, function() {
			if(right) {
				$('#carousel_ul li:first').before($('#carousel_ul li:last'));
			} else {
				$('#carousel_ul li:last').after($('#carousel_ul li:first'));
			}
			$('#carousel_ul').css({
				'left' : '-0px'
			});

		});
	}

	$('#carousel_ul li:first').before($('#carousel_ul li:last'));

	$(' #carousel_inner .filter, #left_scroll').live('click', function() {
		scrolling(true);
	});
	$(' #right_scroll').live('click', function() {
		scrolling();
	});
	$('.mn-technology, .sub-nav-technology').hover(function() {

		$('.sub-nav-technology').css('display', 'block');
		$('.mn-technology').addClass('hover-nav');
	}, function() {
		$(".sub-nav-technology").css('display', 'none');
		$('.mn-technology').removeClass('hover-nav');

	});
	$('.mn-services, .sub-nav-services').hover(function() {

		$('.sub-nav-services').css('display', 'block');
		$('.mn-services').addClass('hover-nav');
	}, function() {
		$(".sub-nav-services").css('display', 'none');
		$('.mn-services').removeClass('hover-nav');

	});
	$('.mn-about, .sub-nav-about').hover(function() {

		$('.sub-nav-about').css('display', 'block');
		$('.mn-about').addClass('hover-nav');
	}, function() {
		$(".sub-nav-about").css('display', 'none');
		$('.mn-about').removeClass('hover-nav');

	});
	$('.mn-contactUs, .sub-nav-contactUs').hover(function() {

		$('.sub-nav-contactUs').css('display', 'block');
		$('.mn-contactUs').addClass('hover-nav');
	}, function() {
		$(".sub-nav-contactUs").css('display', 'none');
		$('.mn-contactUs').removeClass('hover-nav');

	});
	
	
	
	
		var _debug = false;
		var _placeholderSupport = function() {
			var t = document.createElement("input");
			t.type = "text";
			return ( typeof t.placeholder !== "undefined");
		}();

		window.onload = function() {
			var arrInputs = document.getElementsByTagName("input");
			for(var i = 0; i < arrInputs.length; i++) {
				var curInput = arrInputs[i];
				if(!curInput.type || curInput.type == "" || curInput.type == "text")
					HandlePlaceholder(curInput);
				else if(curInput.type == "password")
					ReplaceWithText(curInput);
			}

			if(!_placeholderSupport) {
				for(var i = 0; i < document.forms.length; i++) {
					var oForm = document.forms[i];
					if(oForm.attachEvent) {
						oForm.attachEvent("onsubmit", function() {
							PlaceholderFormSubmit(oForm);
						});
					} else if(oForm.addEventListener)
						oForm.addEventListener("submit", function() {
							PlaceholderFormSubmit(oForm);
						}, false);
				}
			}
		};
		function PlaceholderFormSubmit(oForm) {
			for(var i = 0; i < oForm.elements.length; i++) {
				var curElement = oForm.elements[i];
				HandlePlaceholderItemSubmit(curElement);
			}
		}

		function HandlePlaceholderItemSubmit(element) {
			if(element.name) {
				var curPlaceholder = element.getAttribute("placeholder");
				if(curPlaceholder && curPlaceholder.length > 0 && element.value === curPlaceholder) {
					element.value = "";
					window.setTimeout(function() {
						element.value = curPlaceholder;
					}, 100);
				}
			}
		}

		function ReplaceWithText(oPasswordTextbox) {
			if(_placeholderSupport)
				return;
			var oTextbox = document.createElement("input");
			oTextbox.type = "text";
			oTextbox.id = oPasswordTextbox.id;
			oTextbox.name = oPasswordTextbox.name;
			//oTextbox.style = oPasswordTextbox.style;
			oTextbox.className = oPasswordTextbox.className;
			for(var i = 0; i < oPasswordTextbox.attributes.length; i++) {
				var curName = oPasswordTextbox.attributes.item(i).nodeName;
				var curValue = oPasswordTextbox.attributes.item(i).nodeValue;
				if(curName !== "type" && curName !== "name") {
					oTextbox.setAttribute(curName, curValue);
				}
			}
			oTextbox.originalTextbox = oPasswordTextbox;
			oPasswordTextbox.parentNode.replaceChild(oTextbox, oPasswordTextbox);
			HandlePlaceholder(oTextbox);
			if(!_placeholderSupport) {
				oPasswordTextbox.onblur = function() {
					if(this.dummyTextbox && this.value.length === 0) {
						this.parentNode.replaceChild(this.dummyTextbox, this);
					}
				};
			}
		}

		function HandlePlaceholder(oTextbox) {
			if(!_placeholderSupport) {
				var curPlaceholder = oTextbox.getAttribute("placeholder");
				if(curPlaceholder && curPlaceholder.length > 0) {
					Debug("Placeholder found for input box '" + oTextbox.name + "': " + curPlaceholder);
					oTextbox.value = curPlaceholder;
					oTextbox.setAttribute("old_color", oTextbox.style.color);
					oTextbox.style.color = "#c0c0c0";
					oTextbox.onfocus = function() {
						var _this = this;
						if(this.originalTextbox) {
							_this = this.originalTextbox;
							_this.dummyTextbox = this;
							this.parentNode.replaceChild(this.originalTextbox, this);
							_this.focus();
						}
						Debug("input box '" + _this.name + "' focus");
						_this.style.color = _this.getAttribute("old_color");
						if(_this.value === curPlaceholder)
							_this.value = "";
					};
					oTextbox.onblur = function() {
						var _this = this;
						Debug("input box '" + _this.name + "' blur");
						if(_this.value === "") {
							_this.style.color = "#c0c0c0";
							_this.value = curPlaceholder;
						}
					};
				} else {
					Debug("input box '" + oTextbox.name + "' does not have placeholder attribute");
				}
			} else {
				Debug("browser has native support for placeholder");
			}
		}

		function Debug(msg) {
			if( typeof _debug !== "undefined" && _debug) {
				var oConsole = document.getElementById("Console");
				if(!oConsole) {
					oConsole = document.createElement("div");
					oConsole.id = "Console";
					document.body.appendChild(oConsole);
				}
				oConsole.innerHTML += msg + "<br />";
			}
		}

	$('.read-more-content').addClass('hide');
	$('.read-more-toggle').live('click', function() {
		$(this).prev('.read-more-content').toggleClass('hide');
		$(this).css('display','none');
	});
	
	
	
	$('.wheel-center').hide();
	$('.wheel-bg>div').hover(function(){	
		$('.p-'+$(this).attr('class')).show();
		$('.wheel-center').show();
		console.log('asdf');
		$('.wheel-hover').css('background-image','url("../images/banner-infographic/'+$(this).attr('class')+'.png")')
	},function(){
		$('.p-'+$(this).attr('class')).hide();	
		$('.wheel-center').hide();
		$('.wheel-hover').css('background-image','none')	
	})
		
	
	$('ul.subtab>li>a').click(function(e){
		e.preventDefault();

		$(this).closest('.subtab').find('.active').removeClass('active');
		$(this).parent().addClass('active');
		$(this).closest('.nav-cont').find('.subtab-cont').find('.open').removeClass('open');
		$(this).closest('.nav-cont').find('.subtab-cont').find('#'+ $(this).parent().attr('id')+'-cont').addClass('open');

		//$(this).closest('li').toggleClass('open');
	})
	
	$('.tabnav ul li a').click(function(e){
		
		e.preventDefault();
		if($(this).parent().hasClass('active')){

		}else{
			$('.tabnav ul li.active').removeClass('active');
			$(this).parent().addClass('active');
			$('.tabcontent>ul>li.active').removeClass('active');
			var tID = $(this).parent().attr('id');
			//alert(tID);
			$('.tabcontent>ul>li#'+tID+'-cont').addClass('active');
		}
	})
	
});




















