function validate() {
    var valid = true;
    valid = checkEmpty($("#inputName"));
    valid = valid && checkEmail($("#inputEmail"));
    valid = valid && checkEmpty($("#inputSubject"));
    valid = valid && checkEmpty($("#inputMessage"));
    $("#submitButton").attr("disabled", true);
    if (valid) {
        $("#submitButton").attr("disabled", false);
    }
}
function checkEmpty(obj) {
    var name = $(obj).attr("name");
    $("." + name + "-validation").html("");
    $(obj).css("border", "");
    if ($(obj).val() == "") {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + name + "-validation").html("Required");
        return false;
    }
    return true;
}
function checkEmail(obj) {
    var result = true;
    var name = $(obj).attr("name");
    $("." + name + "-validation").html("");
    $(obj).css("border", "");
    result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + name + "-validation").html("Required");
        return false;
    }
    var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,3})+$/;
    result = email_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + name + "-validation").html("Invalid");
        return false;
    }
    return result;
}
