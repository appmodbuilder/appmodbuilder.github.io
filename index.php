<!doctype html>
<html>
<head>
<title>App Mod Builder</title>
<meta name="description" content="WELCOME MY  WEB SITE FOR MODDED PC / ANDROID FULL APPLICATIONS." />
<meta name="robots" content="all,index,follow" /><meta name = "viewport" content = "initial-scale = 1.1, user-scalable = no"><meta charset="UTF-8" />
<link rel="manifest" href="https://www.socialcreator.com/appmodbuilder/manifest.json">
<link rel="apple-touch-icon" href="https://www.socialcreator.com/srv/imgs/gen/54269_ico.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="AppModBuilder">
<link rel="stylesheet" href="https://www.socialcreator.com/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-animate-opacity{-webkit-animation:opac 1s;animation:opac 1s}
@-webkit-keyframes opac{from{opacity:0} to{opacity:1}}
@keyframes opac{from{opacity:0} to{opacity:1}}


html{min-height:100%;}
body
{
margin:0px;padding:0px;font-family:Roboto;background-color:#212121;	background-image: url("https://www.socialcreator.com/srv/imgs/gen/54269_fondo.png");
	background-size:cover;background-position:center;background-repeat:no-repeat;}

h1.cab{margin-left:10px;color:#F5F5F5;}
h3.cab{margin-left:10px;color:#E0E0E0;}
.txtgen{font-size:18px;}
.txtgen2{font-size:16px;}
@media all and (max-width: 460px)
{
	h1.cab{font-size:22px;}
	h3.cab{font-size:16px;}
	.txtgen{font-size:16px;}
	.txtgen2{font-size:16px;}
}


.topcmain{border:0px;transition:background-color 0.2s ease;white-space:nowrap;cursor:pointer;}
.topcmain:hover{background-color:#72a6db;}
@media all and (max-width: 790px)
{
	.topcmain:hover{background-color:#72acdb;}
}

hr{position:inherit;height: 1px;border: 0;border-top: 1px solid;margin: 1em 0;padding: 0;}

.brillar{opacity: 0.7;transition:opacity 0.2s ease;}
.brillar:hover{opacity: 1;}

.boton1{
	padding:10px;
	font-size:18px;
	font-family:Roboto;
	cursor:pointer;
	transition:background-color 0.2s ease;
	color:#000000;
	background-color:#FFFFFF;
}
.boton1:hover{background-color:#e1e1e1;}
.somb{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.tit_card{font-size:18px;margin:5px;color:#F5F5F5;}
.subtit_card{font-size:14px;margin:5px;color:#E0E0E0;}
.fecha_card{font-size:14px;margin:5px;color:#BDBDBD;}

.tprodimgs{width:500px;}
.tprodflecha{left:462px;}
.mySlidesProd{max-width:490px;}
.divmapa{width:500px;}
.videoprod{width:500px;height:375px;}
@media all and (max-width: 500px)
{
	.tprodimgs{width:250px;}
	.tprodflecha{left:212px;}
	.mySlidesProd{max-width:240px;}
	.divmapa{width:250px;}
	.videoprod{width:250px;height:188px;}
}



.modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width:600px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}


	* {
	    box-sizing: border-box;
	}

	.row-grid:after {
	    content: "";
	    clear: both;
	    display: block;
	}

	[class*="col-"] {
	    float: left;
	    padding: 15px;
	    width: 100%;
	}
	@media only screen and (min-width: 791px) {
	    .col-2 {width: 50%;}
	    .col-3 {width: 33.33%;}
	    .col-4 {width: 25%;}
	    .col-5 {width: 20%;}
	    .col-6 {width: 16.66%;}
	    .col-7 {width: 14.28%;}
	    .col-8 {width: 12.5%;}
	}
	
		.centrado1{float:left;position:relative;left:50%;}
	.centrado2{float:left;position:relative;left:-50%;}

		@media only screen and (min-width: 791px) {
	    .col-22 {width: auto;}
	}
	
	@media only screen and (min-width: 1116px) {
	    .col-33 {width: auto;}
	}
	.hoverlight:hover{box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.2);}
	.av_cr{color:#666666;font-size:12px!important;position:relative;top:-1px;cursor:pointer;}
	.av_ci{color:#CC0000;font-size:9px!important;position:relative;top:-2px;}
	@media all and (min-width: 791px)
	{
		#tcab{height:80px;}
		#tcab_td_aux{height:80px;}
		#imgcab{max-height:76px;}		#lema{font-weight:bold;font-size:24px;}		.icotop_2{font-size:14px;position:absolute;top:12px;right:108px;}
		.icotop_22{font-size:14px;position:absolute;top:12px;right:5px;}
		.tdicotop{padding:15px;font-size:24px;color:#;}
		#avisos{position:absolute;top:40px;right:5px;z-index:99;display:none;}
		
					#tcab_aux{display:none;}
					#btnatras{display:none;}
					#btnslide{display:none;}
			}

	@media all and (max-width: 790px)
	{
		#tcab{height:40px;}
		#tcab_td_aux{height:40px;}
		#imgcab{max-height:36px;}		#lema{font-weight:bold;font-size:12px;}		.icotop_2{font-size:10px;position:absolute;top:2px;right:73px;}
		.icotop_22{font-size:10px;position:absolute;top:2px;right:5px;}
		.tdicotop{padding:10px;font-size:15px;color:#;}
		#avisos{position:absolute;top:35px;right:5px;z-index:99;display:none;}

					#tcab_aux{display:none;}
					#btnatras{display:none;}
					#btnslide{display:none;}
			}

</style>
<script src="https://www.socialcreator.com/jquery-1.11.3.min.js"></script>
<script src="https://www.socialcreator.com/dom/js_getCookie.js"></script>
<script language="javascript">

$(document).ready(function(){
	$(document).click(function() {
	    $("#avisos").hide();
	});
});

function fcaddia(d_str,idaviso)
{
	var d_aux = new Date(2000+parseInt(d_str.substr(4,2)),parseInt(d_str.substr(2,2))-1,parseInt(d_str.substr(0,2)),parseInt(d_str.substr(6,2)),parseInt(d_str.substr(8,2)));
	d_aux.setMinutes(d_aux.getMinutes() - d_aux.getTimezoneOffset());
	var d_aux_3=new Date(d_aux);
	d_aux_3.setHours(0,0,0,0);

	var cad_dia="";
	var today=new Date();
	today.setHours(0,0,0,0);
	var yesterday=new Date(today);
	yesterday.setDate(yesterday.getDate()-1)
	if(d_aux_3.getTime()==today.getTime()){cad_dia="Today";}
	else if(d_aux_3.getTime()==yesterday.getTime()){cad_dia="Yesterday";}
	else
	{
		var dia_aux=d_aux_3.getDate();if(dia_aux<10){dia_aux="0"+dia_aux;};
		var mes_aux=d_aux_3.getMonth()+1;if(mes_aux<10){mes_aux="0"+mes_aux;};
					cad_dia=dia_aux+"-"+mes_aux+"-"+d_aux_3.getFullYear();
			};
	var h_aux=d_aux.getHours();if(h_aux<10){h_aux="0"+h_aux;};
	var mi_aux=d_aux.getMinutes();if(mi_aux<10){mi_aux="0"+mi_aux;};
	cad_dia+="&nbsp;"+h_aux+":"+mi_aux;

	$(".fh"+idaviso).html(cad_dia);
};

function fvisto(id)
{
	$(".av_ci"+id).hide();
	$(".av_cr"+id).hide();
	var n_aux=$("#av_nnuevos").html()-1;
	if(n_aux==0){$("#av_nnuevos").hide();}
	else{$("#av_nnuevos").html(n_aux);};
    $.ajax({
      type: "GET",
      url: "https://www.socialcreator.com/dom/aviso_leido.php?idusu=16225242",
      data: "avle="+id
     });
}

function falert(cad)
{
	document.getElementById("modaltxt").innerHTML=cad;
	document.getElementById('divmodal').style.display="block";
}
function fconfirm(cad,f,p)
{
	document.getElementById("modaltxtconfirm").innerHTML=cad;
	$("#btnmodalok").prop('onclick',null).off('click');	$("#btnmodalok").click(function() {
		$('#divmodalconfirm').hide();
				if(f.indexOf('@')!=-1)
		{
			f=f.split("@");
			if(f.length==3){self.frames[f[0]][f[1]][f[2]](p);}
			else if(f.length==2){self.frames[f[0]][f[1]](p);};
		}
		else
		{
    		window[f](p);
    	};
  	});
	document.getElementById('divmodalconfirm').style.display="block";
}


jQuery(function( $ )
{
			falert("<table style='border:0px;'><tr><td style='width:52px;'><img src='https://www.socialcreator.com/srv/imgs/gen/54269_ico.png' style='border:0px;max-width:50px;max-height:50px;'></td>"+
		"<td style='font-weight:bold;'>Create a shortcut</td></tr><tr><td colspan='2'><p>Create a shortcut on your desktop to access faster.<br><br>Choose in your browser the option to add this page to your home screen.</p></td></tr></table>");
	
	});
</script>


</head>
<body>
	<table id="tcab_aux">
	<tr>
	<td id="tcab_td_aux"></td>
	</tr>
	</table>
	<table id="tcab" style="background-color:#333366;background:linear-gradient(#333366,#000000);width:100%;z-index:101;border-bottom:1px solid #BDBDBD;">	<tr>
					<td style="padding:0;"><table style="border:0px;width:auto;" colspacing="0" align="center">
		<tr>
					<td><a href="https://www.socialcreator.com/appmodbuilder"><img id="imgcab" style="border:0px;" alt="App Mod Builder logo" src="https://www.socialcreator.com/srv/imgs/gen/54269_ico.png"></a></td>
							<td id="lema" style="padding:5px;color:#FFFFFF;">------ AppModBuilder -------  Hi , Welcome to Modded Application Center</td>
				</tr>
		</table></td>
				<td style="color:#FFFFFF;" align="right">
				<table style="border:0px">
		<tr>
					<td class="hoverlight tdicotop" style="cursor:pointer;" onclick="$('#avisos').toggle();event.stopPropagation();"><i class='fa fa-bell'></i></td>
				</tr>
		</table>

			   		<div id="avisos" class="w3-dropdown-content w3-border" style="z-index:99;">
			<table style="border:0;width:100%;">
			<tr>
			<td align="right" onClick="$('#avisos').hide();event.stopPropagation();">
			<i class="fa fa-times" style="cursor:pointer;margin:5px;"></i>
			</td>
						</tr>
			<tr><td style="height:1px;background-color:#CCCCCC;padding:0;"></td></tr>
			</table>

			
	   			   		    <span class="w3-padding">There is no news</span>
	   			    	</div>
	    				</td>
		</tr>
	</table>




<div id="divmodal" class="modal" style="display:none;" onclick="this.style.display='none';">
  <div id="divmodalcontent" class="modal-content">
    <span class="close">&times;</span>
    <p id="modaltxt"></p>
  </div>
</div>
<div id="divmodalconfirm" class="modal" style="display:none;">
  <div class="modal-content">
    <p id="modaltxtconfirm"></p>
    <button class="w3-btn w3-small w3-blue-grey" id="btnmodalok">OK</button>
    <button class="w3-btn w3-small w3-light-grey" style="margin-left:10px;" onclick="$('#divmodalconfirm').hide();">Cancel</button>
  </div>
</div>




<div class="row-grid">	<div class="col-1">
	    
	    	        <table style="border:0;background-color:#616161;background:linear-gradient(#616161,#757575);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" align="center">
	        <tr><td>
	    	    
		<a href="https://www.socialcreator.com/appmodbuilder/?s=184334"><div  align="center">
		
		    			<img src="https://www.socialcreator.com/srv/imgs/seccs/184334_ico.png?ts=1646427009" alt="CLiCK TO ENTER THE SITE " style="max-width:100%;">
					
		</div></a>		
				
	    </td></tr>
	    </table>
	</div>
	</div><br><br><br><br>



</body>
</html>


