// ================ HANDLIN AGENCY REQUEST
document.querySelector('[type="submit"]').classList.add('disable');


function checkform() 
{
    var f = document.forms["form"].elements;
    var cansubmit = true;


    for (var i = 0; i < f.length; i++) 
    {
        if (f[i].value.length == 0) {
            cansubmit = false;
            document.querySelector('[type="submit"]').classList.add('disable');
        }
    }

    if (cansubmit) 
    {
        document.querySelector('[type="submit"]').disabled = false
        document.querySelector('[type="submit"]').classList.remove('disable');
    }
}


// ================ HANDLIN AGENCY REQUEST
document.getElementById('pick').classList.add('disable');

function checkfield() 
{
    var f = document.forms["sendForm"].elements;
    var cansubmit = true;

    for (var i = 0; i < f.length; i++) 
    {
        if (f[i].value.length == 0) 
        {
            cansubmit = false;
            document.getElementById('pick').classList.add('disable');
        }
    }

    if (cansubmit) 
    {
        document.getElementById('pick').disabled = false
        document.getElementById('pick').classList.remove('disable');
    }
}


