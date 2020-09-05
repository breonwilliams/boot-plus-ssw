jQuery(function($) {
$('.play').click(function(){
    var $this = $(this);

    // starting audio
    var audioID = "sound" + $(this).attr('id');

    $this.toggleClass('active');
    if($this.hasClass('active')){
        $this.text('pause');
        $("#" + audioID).trigger('play');
    } else {
        $this.text('play');
        $("#" + audioID).trigger('pause');
    }
});
});
