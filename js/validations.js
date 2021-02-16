// alert('validation script');
function numbers(e)
{
	var i=e.keyCode;
	return(i>=48 && i<=57);
	// return(i==8||(i>=48 && i<=57));
}
function floats(e)
{
	var i=e.keyCode;
	return(i==46||(i>=48 && i<=57));
}
function alphabets(e)
{
	try{
		if(window.event){
			var charCode=window.event.keyCode;
		}
		else if(e)
		{
			var charCode=e.which;
		}
		else
		{
			return true;
		}
		if (charCode==32||(charCode>=64 && charCode<91)||(charCode>=97 && charCode<123)||charCode==63||charCode==46)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	catch (err){
		alert(err.Description);
	}
}

function alaphanumericWsymbols(e)
{
	try
	{
		if(window.event)
		{
			var charCode=window.event.keyCode;
		}
		else if(e)
		{
			var charCode=e.which;
		}
		else {return true;}
		if (charCode==44||charCode==32||(charCode>=64 && charCode<91)||(charCode>=97 && charCode<123)||charCode==63||charCode==46){
			return true;
		}
		else {return false;}
	}
	catch (err)
	{
		alert(err.Description);
	}
}
