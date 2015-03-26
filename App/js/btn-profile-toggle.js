var $_btnProfile = $('#btn-profile-toggle');
$($_btnProfile).on('click',function(){
	if($_btnProfile.hasClass('profile-open')){
		console.log('has class profile-open');
		$('#profile-box').slideUp("slow",function(){
			$_btnProfile.prop('class','carved profile-closed');
			$('#btn-profile-toggle span').first().prop('class','glyphicon glyphicon-chevron-down');
			$('#btn-profile-toggle-text').text(' Open');

		});
	}else if($_btnProfile.hasClass('profile-closed')){
		console.log('has class profile-closed');
		$('#profile-box').slideDown("slow",function(){
			$_btnProfile.prop('class','carved profile-open');
			var span = $('span')[0];
			$('#btn-profile-toggle span').first().prop('class','glyphicon glyphicon-chevron-up');
			$('#btn-profile-toggle-text').text(' Close');
		});
	};
});