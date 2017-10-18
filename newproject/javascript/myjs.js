//javascript to show the login box

	var buttonnew = document.getElementById('button1');

	function show() {

		var div = document.getElementById('newpost');
		
		if (buttonnew !== 0) {
			div.style.display = 'block';
			buttonnew.style.display = 'none';
			buttonnew2.style.display = 'none';
		}else{
			div.style.display = 'none';
		}
	};

	var buttonnew2 = document.getElementById('button2');

	function showreg() {
		
		var res = document.getElementById('newpost2');

		if (buttonnew2 !==0) {
			res.style.display = 'block';
			buttonnew2.style.display = 'none';
			buttonnew.style.display = 'none';
		}else{
			res.style.display = 'none';
		}
	};






