
$(function() {
  //投稿する画像の読み込み
  $('#review_imgs').change(function() {
    if (!this.files.length) {
      return;
    }

    //投稿する画像を読みんだ時のHTMLの書き換え
    $('#preview').text('');
    var $files = $(this).prop('files');
    var file_length = $files.length;

    //ループでまわして、画像の読み込み
    for (var i = 0; i < file_length; i++) {
      var file = $files[i];
      var fr = new FileReader();

      fr.onload = function(e) {
        var src = e.target.result;
        var img = '<li><img src="' + src +'"></li>';
        $('#preview').append(img);
      }
      fr.readAsDataURL(file);
    }

    $('#preview').css('display', 'block');
    $('.review_files').css('display', 'none');
  });

//画像の変更
  $('#clear').click(

    function() {

      $('#review_imgs').after('<input type="file" name="files" id="review_imgs" accept="image/*" multiple="multiple">');
      $('#review_imgs').remove();
      $('#review_imgs_new').attr('id', 'review_imgs')

    }
  )

});