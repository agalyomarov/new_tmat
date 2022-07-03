function proverka_logina(input) 
{ 
    var value = input.value; 
    var rep = /[^a-z0-9]/g; 
    if (rep.test(value))
	{value = value.replace(rep, ''); input.value = value;} 
} 