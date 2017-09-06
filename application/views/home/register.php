<div id="index-banner" class="parallax-container scrollspy" style="height: auto">
  <div class="section">
    <div class="container" >
      <div class="row" >
        <br>
        <div class="col s12  " style=" background-color: rgba(255,255,255,1); padding: 0 15px 0 15px; " >
        		<div class="row">
			        <div class="col s12" >
			        	<h3 class="header black-text center-align">REGISTER NOW !</h3>
			        </div>
        		</div>
        		<div class="row">
        			<?php  
        			echo "<div class='alert red'>
					  <span class='closebtn' >&times;</span> 
					  ";
					echo "This is an alert box.
					</div>";
        			?>
					<!-- <div class="alert indigo">
					  <span class="closebtn" >&times;</span> 
					  This is an alert box.
					</div>
					<div class="alert amber">
					  <span class="closebtn" >&times;</span> 
					  This is an alert box.
					</div>
					<div class="alert teal">
					  <span class="closebtn" >&times;</span> 
					  This is an alert box.
					</div>
					<div class="alert orange">
					  <span class="closebtn" >&times;</span> 
					  This is an alert box.
					</div> -->
        		</div>
        		<div class="row">
			        <form class="col s10 offset-s1" method="POST" action="Home/register_user">
			            <div class="row" >
			              <div class="input-field col s12 m6" >
			                <input id="r_noHp" type="number" name="r_noHp" class=" validate" onclick="Materialize.toast('Hanya inputan angka', 4000)">
			                <label for="r_noHp">No HP</label>
			              </div>
			              <div class="input-field col s12 m6" >
			                <input id="r_usename" type="text" name="r_username" onclick="Materialize.toast('Hanya inputan  A-Z,a-z, _- dan 0-9', 4000)">
			                <label for="r_username">Username</label>
			              </div>
			              <div class="input-field col s12 m6">
			                <input id="r_password" type="password" name="r_password" onclick="Materialize.toast('Minimal 8 karakter', 4000)">
			                <label for="r_password">Password</label>
			              </div>
			              <div class="input-field col s12 m6">
			                <select name="r_privilege">
			                  <option value="" disabled selected>Choose your option</option>
			                  <option value="admin">Admin</option>
			                  <option value="pimpinan">Pimpinan</option>
			                  <option value="petugas">Petugas</option>
			                  <option value="user">User</option>
			                </select>
			                <label>Privilege</label>
			                <!-- <p style="margin-top: -19px;" class="red-text">salah</p> -->
			              </div>
			            </div>
			            <div class="row">
			            	<button class="btn waves-effect waves-light right" type="submit" onclick="register_user()" name="submit">Submit
			                	<i class="material-icons right">send</i>
			              	</button>
			              <!-- <a class="waves-effect waves-white btn-flat col s5  right indigo darken-4 center white-text" onclick="Materialize.toast('Pendaftaran dalam proses', 4000)">Mendaftar</a> -->
			            </div>
			        </form>
        		</div>
        	</div>
      	</div>
      	<br><br><br><br><br>
    </div>
    <div class="parallax"><img src="./assets/img/12.jpg"></div>
  </div>
</div>
<div class="container">
  <div class="divider"></div>
  <div class="section">
    <div class="row  promo">
      <h3 class="light header center">Apa yang anda dapatkan?</h3>
      <p class="light col s12 caption">1. Mendapat notifikasi penawaran menarik di email anda.<br>2. Mengadakan atau mengikuti pertandingan.<br>3. Mencari grup lain untuk menjadi lawan.<br>4. Menggunakan chat dengan grup lain.</p>
      <!-- <a href="http://materializecss.com/showcase.html" class="btn-large waves-effect waves-light">Explore our Showcase</a> -->
    </div>
  </div>
</div>

<script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function(){

        // Get the parent of <span class="closebtn"> (<div class="alert">)
        var div = this.parentElement;

        // Set the opacity of div to 0 (transparent)
        div.style.opacity = "0";

        // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>