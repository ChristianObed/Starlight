@extends('layout')

@section('content')
<style>
body {
  background-image: url('/ecommerce-example/public/img/logback.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style> 
<div id="formWrapper">
<div id="body"><br><br>
<div class="simulasi">
	<div id="simulasi">
		<div class="drop"><h3>SIMULASI PC RAKITAN</h3></div>
		<div class="custom-dropdown">
		<form name="me" action="print.php" method="post">
		<table width="100%">
        
	
	            <td width='70%'><select name='n1' id='s1' onchange="updateHargax(this,document.getElementById('q1'),document.getElementById('p1'),document.getElementById('nex1')); check()";  >
	                <option value='0'>---AMD AM4 ---</option>
	                <option value='12300000'>Ryzen 9 3950x(12.300.000)</option>
	                <option value='14300000'>Ryzen 9 5950x(Rp. 14.300.000)</option>
	                <option value='8350000'>Ryzen 9 3900xt(Rp. 3.600.000)</option>
	              </select><input name='name1' id='nex1' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty1' id='q1' onchange="updateHarga(this.value, document.getElementById('s1'),document.getElementById('p1'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p1' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n2' id='s2' onchange="updateHargax(this,document.getElementById('q2'),document.getElementById('p2'),document.getElementById('nex2')); Acheck();"  >
	                <option value='0'>---AMD Str ---</option>
	                <option value='550000'>AMD Ryzen Threadripper 3960X 3.8Ghz Up To 4.5Ghz Cache 128MB 280W sTRX4</option>
	                <option value='5525000'>AMD Ryzen Threadripper 3960X 3.8Ghz Up To 4.5Ghz Cache 128MB 280W sTRX4(Rp )</option>
	              </select><input name='name2' id='nex2' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty2' id='q2' onchange="updateHarga(this.value, document.getElementById('s2'),document.getElementById('p2'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p2' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n3' id='s3' onchange="updateHargax(this,document.getElementById('q3'),document.getElementById('p3'),document.getElementById('nex3')); Bcheck();">
	                <option value='0'>--- Amd FM2+  ---</option>
	                <option value='673000'>AMD Carrizo A8-7680 (Radeon R7 Series) 3.5Ghz Cache 2MB 45W Socket FM2+ (Rp. 673.000)</option>
					<option value='560000'>AMD Godavari A6-7480 (Radeon R5 Series) 3.7Ghz Cache 2x1MB 65W Socket FM2+ (Rp. 560.000) </option> 
				</select><input name='name3' id='nex3' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty3' id='q3' onchange="updateHarga(this.value, document.getElementById('s3'),document.getElementById('p3'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p3' class='form__input' type='text' value='0' styles='text-align:right;' disabled><vue-autonumeric :options="'dollar'" v-model="autoNumericModel"></vue-autonumeric></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n4' id='s4' onchange="updateHargax(this,document.getElementById('q4'),document.getElementById('p4'),document.getElementById('nex4')); Ccheck();">
	                <option value='0'>--- Intel Lga 2066  ---</option>
	                <option value='16000000'>Intel Core i9-10940X 3.3Ghz Up To 4.6Ghz - Cache 19.25MB </option>
	                <option value='12200000'>Intel Core i9-10980XE 3.0Ghz Up To 4.6Ghz - Cache 24.75MB </option>
	              </select><input name='name4' id='nex4' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty4' id='q4' onchange="updateHarga(this.value, document.getElementById('s4'),document.getElementById('p4'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p4' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n5' id='s5' onchange="updateHargax(this,document.getElementById('q5'),document.getElementById('p5'),document.getElementById('nex5')); Dcheck();">
	                <option value='0'>--- Intel LGA 1200 ---</option>
	                <option value='7900000'>Intel Core i9-10900K 3.7Ghz Up To 5.3Ghz - Cache 20MB </option>
	                <option value='7200000'>Intel Core i9-10900KF 3.7Ghz Up To 5.3Ghz - Cache 20MB </option>
	              </select><input name='name5' id='nex5' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty5' id='q5' onchange="updateHarga(this.value, document.getElementById('s5'),document.getElementById('p5'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p5' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n6' id='s6' onchange="updateHargax(this,document.getElementById('q6'),document.getElementById('p6'),document.getElementById('nex6')); Echeck();">>
	                <option value='0'>-- Intel LGA 1511 ---</option>
	                <option value='5000000'>Intel Core i7-7700K 4.2Ghz Up To 4.5Ghz - Cache 8MB</option>
	                <option value='2000000'>Intel Core i5-7500 3.4Ghz - Cache 6MB </option>
	              </select><input name='name6' id='nex6' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty6' id='q6' onchange="updateHarga(this.value, document.getElementById('s6'),document.getElementById('p6'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p6' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n7' id='s7' onchange="updateHargax(this,document.getElementById('q7'),document.getElementById('p7'),document.getElementById('nex7'))">
	                <option value='0'>--- Mobo Am4 ---</option>
	                <option value='9000000'>Asus ROG CROSSHAIR VIII Formula</option>
	                <option value='7500000'>Gigabyte X570 Aorus Master</option>
	              </select><input name='name7' id='nex7' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty7' id='q7' onchange="updateHarga(this.value, document.getElementById('s7'),document.getElementById('p7'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p7' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n8' id='s8' onchange="updateHargax(this,document.getElementById('q8'),document.getElementById('p8'),document.getElementById('nex8'))">
	                <option value='0'>--- Mobo Str ---</option>
	                <option value='9800000'>MSI MEG X570 Godlike </option>
	                <option value='9350000'>Asus ROG CROSSHAIR VIII Dark Hero </option>
	              </select><input name='name8' id='nex8' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty8' id='q8' onchange="updateHarga(this.value, document.getElementById('s8'),document.getElementById('p8'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p8' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
              
	            <td width='70%'><select  disabled name='n9' id='s9'  onchange="updateHargax(this,document.getElementById('q9'),document.getElementById('p9'),document.getElementById('nex9'));"  >
	                <option value='0'>---MOBO Fm2+ ---</option>
	                <option value='860000'> MAXSUN (By SOYO) MS-A88 Gaming PRO</option>
	                <option value='600000'> Asus A68HM-K </option>
	              </select><input name='name9' id='nex9' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty9' id='q9' onchange="updateHarga(this.value, document.getElementById('s9'),document.getElementById('p9'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p9' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select  disabled name='n10' id='s10' onchange="updateHargax(this,document.getElementById('q10'),document.getElementById('p10'),document.getElementById('nex10')); Ccheck();"  >
	                <option value='0'>--- Mobo 2066 ---</option>
	                <option value='8350000'>Asus PRIME X299 Deluxe II </option>
	                <option value='8000000'>ASRock X299 Creator </option>
	              </select><input name='name10' id='nex10' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty10' id='q10' onchange="updateHarga(this.value, document.getElementById('s10'),document.getElementById('p10'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p10' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n11' id='s11' onchange="updateHargax(this,document.getElementById('q11'),document.getElementById('p11'),document.getElementById('nex11')); Dcheck();">
	                <option value='0'>--- mobo 1200 ---</option>
	                <option value='8400000'>Asus ROG Maximus XIII Hero</option>
	                <option value='6500000'>Gigabyte Z490 Aorus Master</option>
	              </select><input name='name11' id='nex11' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty11' id='q11' onchange="updateHarga(this.value, document.getElementById('s11'),document.getElementById('p11'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p11' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n12' id='s12' onchange="updateHargax(this,document.getElementById('q12'),document.getElementById('p12'),document.getElementById('nex12')); Echeck();">>
	                <option value='0'>--- Mobo 1511 ---</option>
	                <option value='2515000'>Asus Maximus VIII Impact</option>
	                <option value='3500000'>1Asus Workstation P10S-M WS </option>
	              </select><input name='name12' id='nex12' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty12' id='q12' onchange="updateHarga(this.value, document.getElementById('s12'),document.getElementById('p12'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p12' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n13' id='s13' onchange="updateHargax(this,document.getElementById('q13'),document.getElementById('p13'),document.getElementById('nex13'))">
	                <option value='0'>--- Graphic card ---</option>
	                <option value='7000000'>Rtx 3070 Founder Edition (Rp7,000,000)</option>
	                <option value='4100000'>EVGA GeForce GTX 1660 SUPER 6GB DDR6 SC Ultra</option>
	                <option value='10000000'>Gigabyte GeForce RTX 3060 Ti 8GB GDDR6 Eagle OC</option>
	                <option value='14500000'>XFX Radeon RX 6800 XT CORE 16GB DDR6 SPEEDSTER MERC 319 </option>
	                <option value='4379000'>ASRock Radeon RX 5500 XT 8GB DDR6</option>
	              </select><input name='name13' id='nex13' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty13' id='q13' onchange="updateHarga(this.value, document.getElementById('s13'),document.getElementById('p13'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p13' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n14' id='s14' onchange="updateHargax(this,document.getElementById('q14'),document.getElementById('p14'),document.getElementById('nex14'))">
	                <option value='0'>--- Random acces memory ---</option>
	                <option value='2300000'>KLEVV DDR4 BOLT X Series PC25600 3200MHz Dual Channel 32GB </option>
	                <option value='1400000'>ADATA DDR4 XPG SPECTRIX D50 PC25600 3200MHz 16GB</option>
					<option value='2700000'>Corsair DDR4 Vengeance RGB Pro PC32000 16GB</option>
	              </select><input name='name14' id='nex14' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty14' id='q14' onchange="updateHarga(this.value, document.getElementById('s14'),document.getElementById('p14'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p14' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n15' id='s15' onchange="updateHargax(this,document.getElementById('q15'),document.getElementById('p15'),document.getElementById('nex15'))">
	                <option value='0'>--- Power suplies ---</option>
                <option value='720000'>be quiet! SYSTEM POWER 9 600W - 80+ Bronze Certified </option>
	            <option value='5900000'>Asus ROG Thor 1200W Fully Modular - 80+ Platinum</option>
	        	<option value='4000000'>Silverstone 1200W</option>    
			</select><input name='name15' id='nex15' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty15' id='q15' onchange="updateHarga(this.value, document.getElementById('s15'),document.getElementById('p15'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p15' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n16' id='s16' onchange="updateHargax(this,document.getElementById('q16'),document.getElementById('p16'),document.getElementById('nex16'))">
	                <option value='0'>-- Display ---</option>
	                <option value='24000000'>Samsung 49" C49G95 Odyssey G9 Curved Gaming Monitor </option>
	                <option value='17500000'>ASUS XG438Q 43" Gaming Monitor</option>
					<option value='16500000'>SAMSUNG 49" 49HG90D Gaming LED</option>
	              </select><input name='name16' id='nex16' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty16' id='q16' onchange="updateHarga(this.value, document.getElementById('s16'),document.getElementById('p16'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p16' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n17' id='s17' onchange="updateHargax(this,document.getElementById('q17'),document.getElementById('p17'),document.getElementById('nex17'))">
	                <option value='0'>--- Storage ---</option>
	                <option value='84000'>Sandisk MicroSD Ultra 16GB Class 10 80MB Non Adapter (Rp. 84.000)</option>
	                <option value='460000'>Samsung MicroSD Pro 32GB Class 10 (Rp. 460.000)</option>
	                <option value='580000'>Samsung MicroSD Pro 64GB Class 10 (Rp. 580.000)</option>
	              </select><input name='name17' id='nex17' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty17' id='q17' onchange="updateHarga(this.value, document.getElementById('s17'),document.getElementById('p17'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p17' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	                
	    
	          <tr>
	            <td width='70%'><div class="pagetext">	<b>TOTAL</b></div><input name='totalx' id='totalx' type='text' value='17'></td>
	            <td width='10%'><div class="pagetexts"><b>: </b></div></td>
	            <td width='20%'><input name='totali' id='totali' class='form__input' type='text' value='0' styles='text-align:right; text-weight:bold;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'>&nbsp;</td>
	            <td width='10%'>&nbsp;</td>
	            <td width='20%'></a></td>
	          </tr>
	        </table>
	      </form>
	      <a name='TOTAL'></a>
    	<div class="clear-fix"></div>
		<td width='20%'><input type='Submit' name='PrintPrev' id='Submit' value='Print Preview'></td>
    </div>
</div>
</div>    
</div> <!-- end of simulasi -->
	    </div>
	  </div>
	</div> <!-- end of wrapping -->
 </div>



@stop

@section('extra-js')
<script src="{{ asset('js/rakit.js') }}"></script>
<script src="autoNumeric.min.js" type="text/javascript"></script>
@stop

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/rakit.css') }}">
@stop