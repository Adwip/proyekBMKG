	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/body.css">
		<link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">
		<script type="text/javascript">
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		} 
		</script>
		<script language="JavaScript" src="http://time.bmkg.go.id/JamServer.php"></script>

		<script language="JavaScript">

		var weekdaystxt=["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
		var monthstxt=["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]

		var deltaD = (servertimeOBJ.getTime())-(new Date().getTime());
		var displaySeconds = true; 
		var interval;

		function textdates(){
		getthedate();
		if (document.all||document.getElementById)
		t=setTimeout("textdates()", interval); 
		}

		function getthedate(){
		var clientDate = new Date();
		var serverdate = new Date(clientDate.getTime()+deltaD);
		var month=serverdate.getMonth()+1;
		var day=serverdate.getDate();
		var year=serverdate.getFullYear();
		var hours=serverdate.getHours();
		var hoursUTC=hours-7
		if(hoursUTC<0)
		    {
		    hoursUTC = hoursUTC+24;	
		    }


		var minutes=serverdate.getMinutes();
		var seconds=serverdate.getSeconds();
		var milliseconds=serverdate.getMilliseconds();

		//var dn="AM";
		var minggu=weekdaystxt[serverdate.getDay()]
		var bulan=monthstxt[serverdate.getMonth()]
		//if (hours>=12){dn="PM";}
		//if (hours>12){hours=hours-12;}
		//if (hours==0){hours=12;}
		if (hours<=9){hours="0"+hours;}
		if (minutes<=9){minutes="0"+minutes;}

		//if (month<=9){month="0"+month;}
		//if (day<=9){day="0"+day;}

		if (displaySeconds){
			if (seconds<=9){seconds="0"+seconds;}
			if (milliseconds>=10&&milliseconds<=99){milliseconds="0"+milliseconds;}
			if (milliseconds<10){milliseconds="00"+milliseconds;}
		//	var cdate="<div class='FontHari'>"+minggu+", "+day+" "+bulan+" "+year+"</div><div class='FontDigit'>"+hours+":"+minutes+":"+seconds+":"+milliseconds+" "+dn+" WIB</div>";
		//	interval = 1000 - serverdate.getMilliseconds(); 
			var cdate="<div class='FontDigit'>Standar Waktu Indonesia "+hours+":"+minutes+":"+seconds+""+" WIB / "+hoursUTC+":"+minutes+":"+seconds+""+" UTC</div>";
			interval = 10; 
			}
		else{
		//	var cdate="<div class='FontHari'>"+minggu+", "+day+" "+bulan+" "+year+"</div><div class='FontDigit'>"+hours+":"+minutes+" "+dn+" WIB</div>";
			var cdate="<div class='FontDigit'>"+hours+":"+minutes+" WIB</div>";
			interval = (60-seconds)*1000; 
			}
		if (document.all)
		document.all.sTime.innerHTML=cdate;
		else if (document.getElementById)
		document.getElementById("sTime").innerHTML=cdate;
		else{
		document.write(cdate);
		}
		}
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
		<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>BMKG Geofisika Yogyakarta</title>