
var cw = $('.ProfilePicture .UploadButton.MainUpload').width();
$('.ProfilePicture .UploadButton.MainUpload').css({
    'height': cw + 'px'
});
var cw = $('.ProfilePicture .UploadButton.DextopUpload').width();
$('.ProfilePicture .UploadButton.DextopUpload').css({
    'height': cw + 'px'
});
var cw = $('.ProfilePicture .UploadButton.PhoneUpload').width();
$('.ProfilePicture .UploadButton.PhoneUpload').css({
    'height': cw + 'px'
});
var cw = $('.UserSinglePhoto').width();
$('.UserSinglePhoto').css({
    'height': cw + 'px'
});
var cw = $('.SingleDate label').width();
$('.SingleDate label').css({
    'height': cw + 'px'
});
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
$(function() {
setTimeout(function() { $(".Loader").fadeOut(1500); }, 2000)

})
$(".PasswordView").click(function (e) {
    e.preventDefault();
    var type = $(".Password").attr('type');
    switch (type) {
        case 'password':
        {
            $(".Password").attr('type', 'text');
            return;
        }
        case 'text':
        {
            $(".Password").attr('type', 'password');
            return;
        }
    }
});
$('.BodyType li').on('click', function(){
    $('.BodyType li.current').removeClass('current');
    $(this).addClass('current');
});
$('.Ethnicity li').on('click', function(){
    $('.Ethnicity li.current').removeClass('current');
    $(this).addClass('current');
});
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
} 

 
var slider = document.getElementById("myRangePhone");
var output = document.getElementById("demoPhone");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
} 



$(document).ready(function() {
    $('.CustomCheckbox input').bind('click', function() {
        $('CustomCheckbox input').addClass('active').filter($(this)).removeClass('active');
    });
});.
$(document).ready(function() {
    $('.CustomCheckbox input').click(function() {
        $('.CustomCheckbox.active').removeClass("active");
        $('.CustomCheckbox').addClass("active");
    });
});