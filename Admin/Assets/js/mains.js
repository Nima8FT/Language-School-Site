$(document).ready(function () {
  var isDel = false;

  $(".main_detail").click(function (e) {
    RefreshForm();
    if (isDel == false) {
      $(".mainForm").css("display", "flex");
      $(".Confirm").attr("value", "Update");
      $(".Confirm").html("ویرایش");

      var child = $(e.currentTarget).children();
      for (let i = 0; i < child.length; i++) {
        let XX = child[i].innerText;
        if (XX.trim().length > 0)
          try {
            var isSelectBox = $("#ms_" + child[i].id);
            if (isSelectBox.length == 0) {
              $("#input_" + child[i].id).val(XX);
              if (child[i].id.includes("is")) {
                $("#ck_" + child[i].id).val(XX);
                checkBoxValue($("#ck_" + child[i].id)[0]);
              }
            } else {
              let txt = "";
              $("#m_" + child[i].id).val(XX);
              let ch_id_list = XX.split(",");
              //2,3,6,8

              //for Remove .act from all
              let list = isSelectBox[0].parentElement.children[1].children;
              for (let M = 0; M < list.length; M++)
                $(list[M]).removeClass("act");

              for (let k = 0; k < ch_id_list.length; k++) {
                let nameCh = "";
                for (let M = 0; M < list.length; M++)
                  if ($(list[M]).attr("id") == ch_id_list[k])
                    nameCh = $(list[M]).html();

                txt +=
                  '<div id="' +
                  ch_id_list[k] +
                  '" value="' +
                  nameCh +
                  '">' +
                  '    <i onclick="btnDel(this.parentElement.parentElement.parentElement,this.parentElement)">×</i>' +
                  "    <p>" +
                  nameCh +
                  "</p>" +
                  "</div>";

                //for add .act to active select
                for (let M = 0; M < list.length; M++)
                  if ($(list[M]).attr("id") == ch_id_list[k])
                    $(list[M]).addClass("act");
              }
              $(isSelectBox).html(txt);
            }
          } catch (error) {}
      }
    }
  });
  $(".del").click(function (e) {
    isDel = true;
    let child = e.currentTarget.parentElement.parentElement.children;
    let id, name, img;
    for (let i = 0; i < child.length; i++) {
      if ($(child[i]).attr("id") == "id") id = child[i].innerText;
      if ($(child[i]).attr("id") == "name") name = child[i].innerText;
      if ($(child[i]).attr("id").includes("img")) {
        img = $(child[i].children[0]).attr("src");
        break;
      }
    }
    $(".name_movier_form").html(id + "-" + name);
    $(".valDelete").val(id);
    $(".imdDel").attr("src", img);
    $(".mainDel").css("display", "flex");
    if (img.length < 10) $(".imdDel").css("display", "none");
    else $(".imdDel").css("display", "");
  });

  $(".close").click(function (e) {
    $(".mainForm").css("display", "none");
  });

  $(".no").click(function (e) {
    $(".mainDel").css("display", "none");
    isDel = false;
  });

  $(".yes").click(function (e) {
    $(".mainDel").css("display", "none");
    isDel = false;
  });

  $(".insert").click(function (e) {
    $(".mainForm").css("display", "flex");
    $(".Confirm").html("افزودن");
    RefreshForm();
  });

  $("body").on("mousewheel", ".box", function (e) {
    let delta = e.originalEvent.wheelDelta;
    e.currentTarget.scrollLeft -= delta;
  });

  $(".btn_clos>i").click(function (e) {
    $(".menu").toggleClass("menu_clos");
    $(".body").toggleClass("body_full");
    $(".btn_clos>i").toggleClass("icon-bars-solid");
    $(".btn_clos>i").toggleClass("icon-times");
    $(".nav_menu ul li a span").toggleClass("d_none");
    $(".nav_menu").toggleClass("nav_menu_center");
    $(".nav_menu ul li a i").toggleClass("m_0");
  });

  let url = $(location).attr("href");
  let href = url.split("/");
  href = href[href.length - 1];
  CheckActiveMenu(href);
});

$("#plas").click(function (e) {
  var data = $(".input_add>input").val();
  data = parseInt(data);
  $(".input_add>input").val((data += 1000));
});
$("#mains").click(function (e) {
  var data = $(".input_add>input").val();
  data = parseInt(data);
  if (data > 0) {
    $(".input_add>input").val((data -= 1000));
  }
});

$(".box_tabel_row").click(function (e) {
  var name = $(e.currentTarget).children();
  for (let i = 0; i < name.length; i++) {
    try {
      let XX = name[i].innerHTML;
      $("#input_" + name[i].id).val(XX);
    } catch (error) {}
  }

  unSelect();
  $(e.currentTarget).css("background", "var(--Mydark4)");
});

function unSelect() {
  $(".box_tabel_row").css("background", "");
}

function btnDel(Parent, This) {
  let val = $(This).attr("value");
  $(This).remove();

  let child = $(Parent).find(".list>p");
  for (let i = 0; i < child.length; i++)
    if ($(child[i]).html() == val) $(child[i]).removeClass("act");

  // For Add Ids to Input Selects
  let txtVal = "";
  child = Parent.children[1].children;
  for (let i = 0; i < child.length; i++)
    if (child[i].className == "act") txtVal += child[i].id + ",";

  if (txtVal != "")
    $("#m_" + Parent.children[0].id.split("_")[1]).val(
      txtVal.substring(0, txtVal.length - 1)
    );
  else $("#m_" + Parent.children[0].id.split("_")[1]).val(" ");
}

function btnSel(Parent, This) {
  let name = $(This).html();
  $(This).addClass("act");

  let isExist = false;
  let child = $(Parent).find(".box>div");
  for (let i = 0; i < child.length; i++)
    if ($(child[i]).attr("value") == name) {
      isExist = true;
    }

  let html =
    '<div value="' +
    name +
    '">' +
    '<i onclick="btnDel(this.parentElement.parentElement.parentElement,this.parentElement)">×</i>' +
    "<p>" +
    name +
    "</p>" +
    "</div>";

  let Box = $(Parent).find(".box");
  if (isExist == false) $(Box).append(html);

  // For Add Ids to Input Selects
  let txtVal = "";
  child = This.parentElement.children;
  for (let i = 0; i < child.length; i++)
    if (child[i].className == "act") txtVal += child[i].id + ",";

  $("#m_" + Parent.children[0].id.split("_")[1]).val(
    txtVal.substring(0, txtVal.length - 1)
  );
}

function getVal(id) {
  let lst = [];
  let child = $("#" + id).find("div");

  for (let i = 0; i < child.length; i++) lst.push($(child[i]).attr("value"));

  return lst;
}

function checkBox(e) {
  c_val = $(e).attr("value") === "0";
  if (c_val == true) {
    $(e).attr("value", "1");
    $(e).css("background", "#0bd380");
    // $(e).css('justify-content', 'right');

    $(e.children[0]).css("margin-left", "15px");
    $(e.children[0]).css("background", "#005e44");
    $(e.children[0]).css("border", "1px solid #0bd380");
  } else {
    $(e).attr("value", "0");
    $(e).css("background", "#e51c4d");
    // $(e).css('justify-content', 'left');

    $(e.children[0]).css("margin-left", "");
    $(e.children[0]).css("background", "#7a001e");
    $(e.children[0]).css("border", "1px solid #ff003e");
  }
  let fff = $(e).attr("name");
  $("#input_" + $(e).attr("name")).val($(e).attr("value"));
}
function checkBoxValue(e) {
  c_val = $(e).val() === "1";
  if (c_val == true) {
    $(e).attr("value", "0");
    $(e).css("background", "#0bd380");
    // $(e).css('justify-content', 'right');

    $(e.children[0]).css("margin-left", "15px");
    $(e.children[0]).css("background", "#005e44");
    $(e.children[0]).css("border", "1px solid #0bd380");
  } else {
    page;
    $(e).attr("value", "1");
    $(e).css("background", "#e51c4d");
    // $(e).css('justify-content', 'left');

    $(e.children[0]).css("margin-left", "");
    $(e.children[0]).css("background", "#7a001e");
    $(e.children[0]).css("border", "1px solid #ff003e");
  }
  $(e).attr("value", $(e).val());
}
function RefreshForm() {
  $(".selectBox .box").html("");
  $(".input_label input").val("");
  $(".inpots__group input").val("");
}

function CheckActiveMenu(URL) {
  let ch = $(".nav_menu")[0].children[0].children;
  for (let i = 0; i < ch.length; i++) {
    if (URL == $(ch[i].children[0]).attr("href").toLowerCase())
      $(ch[i]).addClass("linkActive");
    try {
      let ch1 = ch[i].children[1].children;
      for (let j = 0; j < ch1.length; j++)
        if (URL == $(ch1[j].children[0]).attr("href").toLowerCase())
          $(ch1[j]).addClass("linkActive");
    } catch (error) {}
  }
  //   let ch = $('.linkActive')
}
// $(".Insert").click(function (e) {
//     var parent = $('.box_input').children();
//     var Table = $('h1').html();
//     var Mode = e.target.className;
//     var Fields = "";
//     var Values = "";
//     for (let i = 0; i < parent.length; i++) {
//         if (parent[i].children[0].htmlFor != id)
//             if (parent.length == i + 1) {
//                 Fields += parent[i].children[0].htmlFor;
//                 Values += $(parent[i].children[1]).val();
//             }
//             else {
//                 Fields += parent[i].children[0].htmlFor + ",";
//                 Values += $(parent[i].children[1]).val() + ",";
//             }
//     }

//     if (Values.length > 0) {
//         $.ajax({
//             method: "POST",
//             url: "php/function.php",
//             data: { Mode: Mode, Table: Table, Fields: Fields, Values: Values },
//             success: function (val) {
//                 $('.body').html(val);
//             }
//         });
//     }

// });
