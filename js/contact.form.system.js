var mailName="Email",systemUrl="/contact-mail/",thanksUrl="/contact-thanks/";function isEmail(e){return!!/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(e)}function errorMessagShow(e){$(".errorMessage").empty(),$(".errorMessage").html(e),$(".errorMessage").fadeIn(),setTimeout(function(){$(".errorMessage").fadeOut()},5e3)}$(function(o){o("#referrer").val(document.referrer),o(".hissuVal").focusin(function(e){o(this).removeClass("borderRed")}),o(".errorMessage").click(function(){o(".errorMessage").fadeOut()}),o("#mailform").submit(function(){var r=o(this).serializeArray(),a=!1;for(let e=0;e<r.length;++e){var s=r[e];s.name&&"check"==s.name&&s.value&&(a=!0)}if(a){var e=!1,t=!1;if(o(".hissuVal").each(function(){o(this).val()||(o(this).addClass("borderRed"),e=!0),o(this).attr("name")==mailName&&((t=isEmail(o(this).val()))||o(this).addClass("borderRed"))}),e&&errorMessagShow("必須項目を入力してください"),t||errorMessagShow("メールアドレスの形式が正しくありません"),e||!t)return!1}if(o.ajax({url:systemUrl,type:"POST",dataType:"json",data:r}).done(function(e){0==e.errflg?a||(window.location.href=thanksUrl):errorMessagShow(e.errorMessage)}),!a)return!1})});