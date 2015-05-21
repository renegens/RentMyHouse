/*!
 * reCaptcha2 add-on
 * This add-ons shows and validates a Google reCAPTCHA v2
 *
 * @link        http://formvalidation.io/addons/reCaptcha2/
 * @license     http://formvalidation.io/license/
 * @author      https://twitter.com/formvalidation
 * @copyright   (c) 2013 - 2015 Nguyen Huu Phuoc
 * @version     v0.3.0, built on 2015-03-25 5:48:49 PM
 */
!function(a){FormValidation.AddOn.reCaptcha2={html5Attributes:{element:"element",language:"language",message:"message",sitekey:"siteKey",theme:"theme",timeout:"timeout"},CAPTCHA_FIELD:"g-recaptcha-response",CAPTCHA_TIMEOUT:120,init:function(b,c){var d=this,e="undefined"==typeof window.reCaptchaLoaded?function(){}:window.reCaptchaLoaded;window.reCaptchaLoaded=function(){e(),grecaptcha.render(c.element,{sitekey:c.siteKey,theme:c.theme||"light",callback:function(){b.updateStatus(d.CAPTCHA_FIELD,b.STATUS_VALID),setTimeout(function(){b.updateStatus(d.CAPTCHA_FIELD,b.STATUS_INVALID)},1e3*(c.timeout||d.CAPTCHA_TIMEOUT))}}),setTimeout(function(){d._addCaptcha(b,c)},3e3)};var f="//www.google.com/recaptcha/api.js?onload=reCaptchaLoaded&render=explicit"+(c.language?"&hl="+c.language:"");if(0===a("body").find('script[src="'+f+'"]').length){var g=document.createElement("script");g.type="text/javascript",g.async=!0,g.defer=!0,g.src=f,document.getElementsByTagName("body")[0].appendChild(g)}},_addCaptcha:function(a,b){var c=this;a.getForm().formValidation("addField",c.CAPTCHA_FIELD,{excluded:!1,validators:{callback:{message:b.message,callback:function(a){return""!==a}}}})}}}(jQuery);