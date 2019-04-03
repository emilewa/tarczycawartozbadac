<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ankieta</title>
	<meta name="description" content="Ankieta - Tarczyca." />
	<meta name="keywords" content="ankiety,tarczyca" />
	<link rel="stylesheet" href="CSS-tarczyca.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

	<a name="gora"></a>

	<div id="container">

		<div id="logo">
			<div id="left">
				<a href="index.php">
                    <img src="logo2.png" alt="logo" />
                </a>
			</div>

		</div>

		<div id="sidebar">

		</div>

		<div id="content">

			<div id="napis">
				<span>A</span><span>N</span><span>K</span><span>I</span><span>E</span><span>T</span><span>A</span>
			</div>
            
                <?php
                echo "<div class='formularz'> <font color='red' >".$_SESSION['komunikat']."</font> </div>";
                $_SESSION['dostep'] = true;
                ?>
			<div class="formularz">

				<form action="wyslij.php" method="post">
					<div>

						<p>Podaj swoją płeć:</p>
						<input type="radio" name="plec" value="K" />Kobieta
						<input type="radio" name="plec" value="M" />Mężczyzna


						<br /><br />

						<p>Ile masz lat?</p>
						<input type="radio" name="wiek" value="1" />mniej niż 15<br />
						<input type="radio" name="wiek" value="2" />15-19<br />
						<input type="radio" name="wiek" value="3" />20-29<br />
						<input type="radio" name="wiek" value="4" />30-39<br />
						<input type="radio" name="wiek" value="5" />40-60<br />
						<input type="radio" name="wiek" value="6" />więcej niż 60

						<br /><br />

						<p>Środowisko życia:</p>
                        <input type="radio" name="gdzie" value="1" />Miasto
                        <input type="radio" name="gdzie" value="2" />Wieś
						

						<br /><br />

						<p>Województwo:</p>
						<select name="wojewodztwo">
							<option selected="selected">Wybierz</option>
							<option name="wojewodztwo" value="1">dolnośląskie</option>
							<option name="wojewodztwo" value="2">kujawsko-pomorskie</option>
							<option name="wojewodztwo" value="3">lubelskie</option>
							<option name="wojewodztwo" value="4">lubuskie</option>
							<option name="wojewodztwo" value="5">łódzkie</option>
							<option name="wojewodztwo" value="6">małopolskie</option>
							<option name="wojewodztwo" value="7">mazowieckie</option>
							<option name="wojewodztwo" value="8">opolskie</option>
							<option name="wojewodztwo" value="9">podkarpackie</option>
							<option name="wojewodztwo" value="10">podlaskie</option>
							<option name="wojewodztwo" value="11">pomorskie</option>
							<option name="wojewodztwo" value="12">śląskie</option>
							<option name="wojewodztwo" value="13">świętokrzyskie</option>
							<option name="wojewodztwo" value="14">warmińsko-mazurskie</option>
							<option name="wojewodztwo" value="15">wielkopolskie</option>
							<option name="wojewodztwo" value="16">zachodniopomorskie</option>
						</select>

                        <br /><br />

                        <p>Czy  uważasz że prowadzisz zdrowy tryb życia pod względem aktywności fizycznej?</p>
                        <input type="radio" name="aktywnosc_fizyczna" value="true" />TAK
                        <input type="radio" name="aktywnosc_fizyczna" value="false" />NIE

                        <br /><br />

                        <p>Czy  uważasz że prowadzisz zdrowy tryb życia pod względem prawidłowej diety?</p>
                        <input type="radio" name="prawidlowa_dieta" value="true" />TAK
                        <input type="radio" name="prawidlowa_dieta" value="false" />NIE

                        <p>Ile godzin dziennie sypiasz?</p>
                        <input type="radio" name="sen" value="1" />mniej niż 4      
                        <input type="radio" name="sen" value="2" />4 - 6
                        <input type="radio" name="sen" value="3" />7 - 9    
                        <input type="radio" name="sen" value="4" />więcej niż 9

						<br /><br />

						<p>Czy zdiagnozowano chorobę tarczycy?</p>
						<input type="radio" name="zdiagnozowano" value="true" />TAK
						<input type="radio" name="zdiagnozowano" value="false" />NIE


						<br /><br />

						<p>Czy występuje w rodzinie?</p>
						<input type="radio" name="wystepujewrodzinie" value="true" />TAK
						<input type="radio" name="wystepujewrodzinie" value="false" />NIE


						<br /><br />

						<p>Jaka rodzaj choroby zdiagnozowano u Ciebie?</p>
						<select name="choroba">
							<option selected="selected">Wybierz</option>
							<option name="choroba" value="1">brak</option>
                            <option name="choroba" value="2">Nadczynność</option>
							<option name="choroba" value="3">Niedoczynność</option>
                            <option name="choroba" value="4">inne</option>
						</select>


						<br /><br />

						<p>Dodatkowe choroby?</p>
						<input type="checkbox" name="depresja" value="1" />depresja<br />
						<input type="checkbox" name="depresja" value="1" />nadciśnienie<br />
						<input type="checkbox" name="otylosc" value="1" />otyłość<br />
						<input type="checkbox" name="cukrzyca" value="1" />cukrzyca<br />
						<input type="checkbox" name="reumatoidalne_zapalenie" value="1" />reumatoidalne zapalenie stawów<br />
                        <input type="checkbox" name="celiakia" value="1" />celiakia<br />
						<input type="checkbox" name="innachoroba" value="1" />inne<br />
						
						<br /><br />
						
						<p>Zaznacz które objawy występują u ciebie?</p>
						<input type="checkbox" name="o1" value="1" />wzrost masy ciała<br />
						<input type="checkbox" name="o2" value="1" />znaczne osłabienie<br />
						<input type="checkbox" name="o3" value="1" />senność<br />
						<input type="checkbox" name="o4" value="1" />uczucie chłodu (zwłaszcza rąk i stóp)<br />
						<input type="checkbox" name="o5" value="1" />obrzęki podskórne<br />
						<input type="checkbox" name="o6" value="1" />zaparcia<br />
						<input type="checkbox" name="o7" value="1" />sucha i łuszcząca się skóra<br />
						<input type="checkbox" name="o8" value="1" />permanentne zmęzenie<br />
						<input type="checkbox" name="o9" value="1" />zaburzenia pamięci<br />
						<input type="checkbox" name="o10" value="1" />blada skóra<br />
						<input type="checkbox" name="o11" value="1" />uczucie gorąca<br />
						<input type="checkbox" name="o12" value="1" />potliwość<br />
						<input type="checkbox" name="o13" value="1" />utrata masy ciała<br />
						<input type="checkbox" name="o14" value="1" />przyspieszenie tętna<br />
						<input type="checkbox" name="o15" value="1" />kołatanie serca<br />
						<input type="checkbox" name="o16" value="1" />powiększenie obwodu szyi<br />
						<input type="checkbox" name="o17" value="1" />niepokój<br />
						<input type="checkbox" name="o18" value="1" />drzenie rąk<br />
						<input type="checkbox" name="o19" value="1" />bezsenność<br />
						<input type="checkbox" name="o20" value="1" />biegunki<br />
						<input type="checkbox" name="o21" value="1" />zaburzenia miesiączkowania<br />
						<input type="checkbox" name="o22" value="1" />problemy z zajściem w ciąże<br />				
                        <br />
						
                        <br />
                        <br />
						<input type="reset" value="Wyczyść dane" style="font-size:15px; height:35px; width:120px; background-color:#006389;" />

						<input type="submit" value="Wyślij" style="font-size:15px; height:35px; width:120px; background-color:#006389;" />

						
					</div>
				</form>

				
			</div>

			<br /><br />


			<div id="footer">
				<a href="#gora">Wróć na początek strony :)</a>
			</div>
        </div>
</body>
</html>