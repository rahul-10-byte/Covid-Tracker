<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;400&display=swap" rel="stylesheet">


    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="./styles1.css" />
    <link rel="stylesheet" href="./styles2.css" />


    <title>COVID-19</title>
</head>

<body onload="fetch()">


    <!-- Navabar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">COVID-19</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abt">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#symp">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prevent">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



	<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 updates Worldwide </h3>	
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotaDeaths</th>
				<th>NewConfirmed</th>
				<th>NewDeaths</th>
				
			</tr>
		</table>
	</div>
</section>


<script type="text/javascript">

function fetch(){
	$.get("https://api.covid19api.com/summary",

			function (data){
			//	console.log(data['Countries'].length)
			var tbval = document.getElementById('tbval');

			for(var i=1; i<(data['Countries'].length); i++){
					var x = tbval.insertRow();
					
					x.insertCell(0);

					tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background = '#7a4a91';
					tbval.rows[i].cells[0].style.color = '#fff';

					x.insertCell(1);

					tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					tbval.rows[i].cells[1].style.background = '#4bb7d8';

					x.insertCell(2);

					tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					tbval.rows[i].cells[2].style.background = '#f36e23';

					x.insertCell(3);

					tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					tbval.rows[i].cells[3].style.background = '#4bb7d8';

					x.insertCell(4);

					tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					tbval.rows[i].cells[4].style.background = '#f36e23';

					x.insertCell(5);

					tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
					tbval.rows[i].cells[5].style.background = '#4bb7d8';
					
				}
			}
		)
}

</script>





    <a id="button"></a>


    <div class="footer text-center" style="font-size: 18px;">
        ©2020 Rahul Kalyankar<br>
      <p style="font-size: 15px;"><i class="fas fa-code"></i> with ❤ by ME 😎 </p>
    </div>
    


</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- MY JS -->

<script src="./back-top.js"></script>

</html>