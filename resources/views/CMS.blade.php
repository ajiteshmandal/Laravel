<html>

<style>

#textarea {
    -moz-appearance: textfield-multiline;
    -webkit-appearance: textarea;
    border: 1px solid gray;
    font: medium -moz-fixed;
    font: -webkit-small-control;
    height: 68px;
    overflow: auto;
    padding: 2px;
    resize: both;
    width: 400px;
}

</style>

<div id="textarea" onMouseUp="myfunction()" contenteditable  >  </div>
<button onclick="blueFunction()" >Blue</button>
<button onclick="redFunction()" >red</button>
<button onclick="greenFunction()" >green</button>
<button onclick="boldFunction()" >Bold</button>
<button onclick="ItalicFunction()" >Italic</button>
<input id="title" type="text">
<button type="button" onclick="myFunction()">Submit</button>


<button type="button" onclick="viewFunction()">View</button>


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script>
function viewFunction()
{
   window.location.href="/app/getarticles";
}
function myFunction(){
	var x=document.getElementById("textarea").innerHTML;
    var y=document.getElementById("title").value;
	//document.getElementById("demo").innerHTML=x;	
    var name={"title":y,"description":x};
   //var m="Ajitesh ";
  // alert(typeof(y));
    $.ajax({
               type:'POST',
               url:'/app/',
               dataType: "json",
               data: {
            "_token": "{{ csrf_token() }}",
            "id":name
        }
         });
}

function blueFunction()
{
	document.execCommand('styleWithCSS', false, true);
    document.execCommand('foreColor', false, "rgb(0,0,255)");

}
function redFunction()
{
		document.execCommand('styleWithCSS', false, true);
    document.execCommand('foreColor', false, "rgb(255,0,0)");
}
function greenFunction()
{
		document.execCommand('styleWithCSS', false, true);
    document.execCommand('foreColor', false, "rgb(0,128,0)");
}
function boldFunction()
{
	document.execCommand("bold");
}

</script>

</html>