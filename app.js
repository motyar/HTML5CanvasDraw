var restorePoints = [];
$(document).ready(function(){
	// This array will store the restoration points of the canvas
var restorePoints = [];
var a=false;var b,c="";var d=document.getElementById("can");
var e=d.getContext("2d");e.strokeStyle="red";
e.lineWidth=5;e.lineCap="round";
e.fillStyle="#fff";e.fillRect(0,0,d.width,d.height);
$("#bsz").change(function(a){e.lineWidth=this.value});
$("#bcl").change(function(a){e.strokeStyle=this.value});
$("#can").mousedown(function(d){saveRestorePoint();a=true;e.save();b=d.pageX-this.offsetLeft;c=d.pageY-this.offsetTop});


$(document).mouseup(function(){a=false});
$(document).click(function(){a=false});

$("#can").mousemove(function(d){
	if(a==true){
		e.beginPath();
		e.moveTo(d.pageX-this.offsetLeft,d.pageY-this.offsetTop);
		e.lineTo(b,c);
		e.stroke();
		e.closePath();
		b=d.pageX-this.offsetLeft;
		c=d.pageY-this.offsetTop}}
		);
		
$("#clr > div").click(function(){e.strokeStyle=$(this).css("background-color");
//$("#bcl").val($(this).css("background-color"))
	});
$("#undo").click(function(){undoDrawOnCanvas();});

$("#eraser").click(function(){e.strokeStyle="#fff"});
$("#save").click(function(){$("#result").html("<img src="+d.toDataURL()+' /><br /><a href="#" id="get" class="minimal" >Download This</a>');$("#data").val(d.toDataURL());$("#get").click(function(){$("#frm").trigger("submit")})});$("#clear").click(function(){e.fillStyle="#fff";e.fillRect(0,0,d.width,d.height);e.strokeStyle="red";e.fillStyle="red"})})


function saveRestorePoint() {
	var oCanvas = document.getElementById("can");
	var imgSrc = oCanvas.toDataURL("image/png");
	restorePoints.push(imgSrc);
}

function undoDrawOnCanvas() {
		if (restorePoints.length > 0) {
		var oImg = new Image();
		oImg.onload = function() {
			var canvasContext = document.getElementById("can").getContext("2d");		
			canvasContext.drawImage(oImg, 0, 0);
		}
		oImg.src = restorePoints.pop();
	}
}
