jQuery(window).on("elementor/frontend/init",(function(){window.elementorFrontend.config.environmentMode.edit&&elementor.channels.editor.on("ekit:editor:pin_click",(function(e){if(e.$el.hasClass("open"))return!1;var n=e.$el.parents("#elementor-controls"),t=n.find("[data-setting='pinterest_user_name']"),r=n.find("[data-setting='pinterest_feed_type']"),a=n.find("[data-setting='pinterest_board_name']"),i=[];if(t[0].value||i.push("pinterest_user_name"),"home"!=r[0].value&&(a[0].value||i.push("pinterest_board_name")),i.length>0)return jQuery.each([{key:"pinterest_user_name",value:"Please give a valid username."},{key:"pinterest_username",value:"Please give a valid username."},{key:"pinterest_feed_type",value:"Please give a valid app secret."},{key:"pinterest_board_name",value:"Please give a valid board name."}],(function(n,t){-1!=jQuery.inArray(t.key,i)&&e.$el.find(".elementor-control-input-wrapper").append('<div class="alert alert-danger" role="alert">'+t.value+"</div>"),setTimeout((function(){e.$el.find(".alert").fadeOut().remove()}),5e3)})),!1;var l={username:t[0].value,type:r[0].value,board:a[0].value};jQuery.ajax({data:l,type:"post",url:window.pinterest_config.rest_url+"elementskit/v1/pinterest/feed/",beforeSend:function(n){n.setRequestHeader("X-WP-Nonce",pinterest_config.nonce),e.$el.find(".elementor-control-input-wrapper").append('<div class="alert alert-info" role="alert">Waiting for server response...</div>'),e.$el.addClass("open")},success:function(n){n.success||alert(n.msg),e.$el.removeClass("open")},error:function(e){},complete:function(){e.$el.find(".alert").fadeOut().remove()}})}))}));