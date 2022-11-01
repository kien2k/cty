// function test() {
//     (document.getElementsByName("title")[0].value = "名前"), (document.getElementsByName("name")[0].value = "フリガナ"), (document.getElementsByName("email")[0].value = "ps1808001@gmail.com"), (document.getElementsByName("email_confirm")[0].value = "ps1808001@gmail.com"), (document.getElementsByName("phone")[0].value = "0312345678"), (document.getElementsByName("inquiry")[0].value = "事前に弊社へお伝えしたいことがございましたら、簡単で構いませんのでご記入ください。");
//   }
  
//   function loadRecaptcha() {
//     /* grecaptcha.ready(function () {
//       grecaptcha.execute("6LdtxyEeAAAAAJsf_Oa4ohQ5TMB97ggs34MW87Y3", { action: "contact_form" }).then(function (e) {
//         document.getElementById("recaptcha").value = e;
//       });
//     }); */
//   }
//   jQuery(function () {
//     jQuery(".fix-byte")
//       .change(function () {
//         var e = jQuery(this).val();
//         (e = e.replace(/[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function (e) {
//           return String.fromCharCode(e.charCodeAt(0) - 65248);
//         })),
//           jQuery(this).val(e);
//       })
//       .change(),
//       jQuery(".fix-num")
//         .change(function () {
//           var e;
//           (e = (e = jQuery(this).val()).replace(/[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function (e) {
//             return String.fromCharCode(e.charCodeAt(0) - 65248);
//           })),
//             jQuery(this).val(e),
//             (e = (e = jQuery(this).val()).replace(/[^0-9]/g, "")),
//             jQuery(this).val(e);
//         })
//         .change()
//     loadRecaptcha()
  
//   }),
//     jQuery.extend(jQuery.validator.messages, {
//       required: "※こちらの項目を入力してください",
//       email: "正しいメール形式をご入力ください",
//     }),
//     $("#contact-form").validate({
  
//       messages: {
//         tobuy: "※こちらの項目を選択してください",
//         howbuy: "※こちらの項目を選択してください",
//         mrent: "※こちらの項目を選択してください",
//         takehome: "※こちらの項目を選択してください",
//         payday: "※こちらの項目を選択してください",
//         numemp: "※こちらの項目を選択してください",
//         fromemp: "※こちらの項目を選択してください",
//         service: "※こちらの項目を選択してください",
//         numphone: "※電話番号が入力されていません。",
//         emernum: "※電話番号が入力されていません。",
//         resinum: "※電話番号が入力されていません。",
  
//       },
//       errorPlacement: function (error, element) {
//         var name = element.attr('name');
//         if (name == "gender") {
//           error.insertAfter("div[class='radio-style radio-gender']");
//         } else if (name == "marriage") {
//           error.insertAfter("div[class='radio-style radio-marriage']");
//         }
//         else if (name == "residence") {
//           error.insertAfter("div[class='radio-style radio-residence']");
//         }
//         else if (name == "insu") {
//           error.insertAfter("div[class='radio-style radio-insu']");
//         }
//         else if (name == "bonus") {
//           error.insertAfter("div[class='radio-style radio-bonus']");
//         }
//         else if (name == "holiday") {
//           error.insertAfter("div[class='radio-style radio-holiday']");
//         }
//         else {
//           error.insertAfter(element)
//         }
//       },
//       submitHandler: function (e) {
//         const submitAction = $(e).attr('action');
//         const pageThanks = $(e).data('page_thanks');
//         $(e).submit(() => !1), $("#submit-btn").prop("disabled", !0);
//         let t = $('<div id="form-submiting"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>');
//         $("body").append(t);
  
//         $.ajax({
//           url: submitAction,
//           data: $(e).serialize(),
//           type: "post",
//           success: function (e) {
//             window.location.replace(pageThanks);
//           },
//           error: function (e) {
//             const t = JSON.parse(e.responseText);
//             $.each(t, (e, t) => {
//               $("#" + e).after(`<label id="${e}-error" class="error" for="${e}">${t}</label>`);
//             })
//             loadRecaptcha();
//           },
//         }).always(() => {
//           $("#submit-btn").prop("disabled", !1), t.remove();
//         });
//       },
//     });
  