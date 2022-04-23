
$(function() {
  //投稿する画像の読み込み

  $('#profeal_file').change(function(e) {

    var reader = new FileReader();
    reader.onload = function (e) {
      $("#preview").attr('src',e.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);

    $('.profeal_file').css('display', 'none');
    $('#preview').css('display', 'block');
    $('#crear').css('display', 'block');
  })

  //画像の変更

  $('#clear').click(

    function() {
      $('#profeal_file').after('<input type="file" name="image1" id="profeal_file" accept="image/*">');
      $('#profeal_file').remove();
      $('#profeal_file_new').attr('id', 'profeal_file_new')
    }
  )

});