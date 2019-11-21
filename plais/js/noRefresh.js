function chk(){
		var bullNum=document.getElementById('bulletinNo').value;
		var dataString='bullNum='+bullNum;
			$.ajax({
				type:"post",
				url: "openBulletin.php",
				data:dataString,
				cache:false,
				success: function(html){
					$('#choosenBulletin').html(html);
				}
			});
			return false;
		}	