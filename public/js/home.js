var count = 0;
$(document).ready(function(){
		$('#hieu').click(function(){
			if(count == 0){
				jp_audio_0.play();
				count++;
			}else{
				jp_audio_0.stop();
				count = 0;
			}
		});
});
