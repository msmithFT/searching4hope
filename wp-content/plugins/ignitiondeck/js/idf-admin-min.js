function idf_flush_object(e){jQuery.ajax({url:idf_admin_ajaxurl,type:"POST",data:{action:"idf_flush_object",object:e},success:function(e){console.log(e)}})}function idfRegister(e){if(resVar=e.data,"https://ignitiondeck.com"==e.origin&&void 0!==resVar&&"idf: registered"==resVar.response){var a;void 0!==e.data.customer&&(a=e.data.customer),setTimeout(function(){jQuery.magnificPopup.close(),jQuery.ajax({url:idf_admin_ajaxurl,type:"POST",data:{action:"idf_registered",Email:a},success:function(e){location.reload()}})},1500)}}function openLBGlobal(e,a,i){jQuery.magnificPopup.open({type:"inline",items:{src:jQuery(e)},callbacks:{open:function(){void 0!==a&&null!==a&&a()},close:function(){void 0!==i&&null!==i&&i()}}})}function closeLBGlobal(){jQuery.magnificPopup.close()}jQuery(document).ready(function(){jQuery(".openLBGlobal").click(function(e){e.preventDefault(),openLBGlobal(jQuery(this).attr("href"))}),void 0!==jQuery("#id_account")&&(jQuery("#id_account").magnificPopup({type:"iframe",iframe:{patterns:{ignitiondeck:{index:"ignitiondeck.com",src:launchpad_link}}}}),jQuery("#id_account").click(function(e){})),window.addEventListener("message",idfRegister,!1),jQuery("#idf_reset_account").click(function(e){e.preventDefault();var a=jQuery(this);jQuery(a).addClass("processing"),jQuery.ajax({url:idf_admin_ajaxurl,type:"POST",data:{action:"idf_reset_account"},success:function(e){console.log(e),jQuery(document).trigger("idfResetAccount"),jQuery(a).removeClass("processing"),location.reload()},error:function(e){jQuery(a).removeClass("processing")}})}),jQuery(".activate_theme").click(function(e){e.preventDefault();var a=jQuery(this).data("theme");jQuery.ajax({url:idf_admin_ajaxurl,type:"POST",data:{action:"idf_activate_theme",theme:a},success:function(e){1==e&&location.reload()}})}),jQuery('.extension_subheader select[name="module_filter"]').change(function(){var e=jQuery(this).val(),a=jQuery(".extension");jQuery.each(a,function(){switch(jQuery(this).hasClass(e)){case!1:jQuery(this).hide();break;default:jQuery(this).show();break}})}),jQuery('.extension_subheader input[name="hide_locked"]').change(function(){jQuery(this).attr("checked")?jQuery('.extension[data-locked="1"]').hide():jQuery(".extension").show()}),jQuery('.extension[data-locked="1"]').hover(function(){jQuery(this).find(".fa.fa-lock").removeClass("fa-lock").addClass("fa-unlock")},function(){jQuery(this).find(".fa.fa-unlock").removeClass("fa-unlock").addClass("fa-lock")}),jQuery(".extension-link .active-installed").click(function(e){e.preventDefault();var a=jQuery(this).data("extension");jQuery.ajax({url:idf_admin_ajaxurl,type:"POST",data:{action:"idf_activate_extension",extension:a},success:function(e){1==e&&location.reload()}})}),"legacy"!==idf_platform&&jQuery('input[value="pwyw"]').attr("disabled","disabled")});