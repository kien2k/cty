jQuery.extend(jQuery.validator.messages, {
  required: "※こちらの項目を入力してください",
  email: "正しいメール形式をご入力ください",
}),
$(function() {
  var $contact_Form = $("#contact-form");
  if ($contact_Form.length) {
    $contact_Form.validate({
      rules: {
        numphone: {
          number:true,
          minlength:10,
        },
        emernum: {
          number:true,
          minlength:10,
        },
        resinum: {
          number:true,
          minlength:10,
        },
      },
      messages: {
        tobuy: "※こちらの項目を選択してください",
        howbuy: "※こちらの項目を選択してください",
        mrent: "※こちらの項目を選択してください",
        takehome: "※こちらの項目を選択してください",
        payday: "※こちらの項目を選択してください",
        numemp: "※こちらの項目を選択してください",
        fromemp: "※こちらの項目を選択してください",
        service: "※こちらの項目を選択してください",
        numphone:{
          number: "※電話番号が入力されていません。",
          minlength:"Please enter at least 10 characters",
        },
        emernum: {
          number: "※電話番号が入力されていません。",
          minlength:"Please enter at least 10 characters",
        },
        resinum: {
          number: "※電話番号が入力されていません。",
          minlength:"Please enter at least 10 characters",
        }
      },
        errorPlacement: function (error, element) {
            var name = element.attr('name');
            if (name == "gender") {
                error.insertAfter(".radio-gender");
            } else if (name == "marriage") {
                error.insertAfter(".radio-marriage");
            }
            else if (name == "residence") {
                error.insertAfter(".radio-residence");
            }
            else if (name == "insu") {
                error.insertAfter(".radio-insu");
            }
            else if (name == "bonus") {
                error.insertAfter(".radio-bonus");
            }
            else if (name == "holiday") {
                error.insertAfter(".radio-holiday");
            }
            else {
                error.insertAfter(element)
            }
        },
      });

  }
})

