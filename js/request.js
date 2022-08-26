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




// // =========MAIL ICON MESSAGE
// window.addEventListener('DOMContentLoaded', function (event) {

// // contact request submit
// let mail_msg = document.querySelector('#mail_msg');
// mail_msg.addEventListener('submit', function (e) 
// {


//     // e.preventDefault();

//     let e_mail = document.querySelector('.email_1').value;
//     let p_phone = document.querySelector('.phone_1').value;
//     let m_message = document.querySelector('.message_1').value;

//     // ======== validate inputs
//     if (e_mail == "") 
//     {
//         document.querySelector('.mail_er').innerHTML = "This field is required";
//         document.querySelector('.mail_er').style.color = "red";
//         document.querySelector('.mail_er').style.display = "block";
//         document.querySelector('.email_1').style.border = "1px solid red";
//     }
//     else
//     {
//         document.querySelector('.mail_er').innerHTML = "";
//         document.querySelector('.mail_er').style.color = "none";
//         document.querySelector('.mail_er').style.display = "none";
//         document.querySelector('.email_1').style.border = "2px solid #ddd";
//     }
//     if (p_phone == "") 
//     {
//         document.querySelector('.phone_er').innerHTML = "This field is required";
//         document.querySelector('.phone_er').style.color = "red";
//         document.querySelector('.phone_er').style.display = "block";
//         document.querySelector('.phone_1').style.border = "1px solid red";
//     }
//     else
//     {
//         document.querySelector('.phone_er').innerHTML = "";
//         document.querySelector('.phone_er').style.color = "none";
//         document.querySelector('.phone_er').style.display = "none";
//         document.querySelector('.phone_1').style.border = "2px solid #ddd";
//     }
//     if (m_message == "") 
//     {
//         document.querySelector('.msg_er').innerHTML = "This field is required";
//         document.querySelector('.msg_er').style.color = "red";
//         document.querySelector('.msg_er').style.display = "block";
//         document.querySelector('.message_1').style.border = "1px solid red";
//     }
//     else
//     {
//         document.querySelector('.msg_er').innerHTML = "";
//         document.querySelector('.msg_er').style.color = "none";
//         document.querySelector('.msg_er').style.display = "none";
//         document.querySelector('.message_1').style.border = "2px solid #ddd";
//     }

//     // === validate inputs

//     if(e_mail !== "" && p_phone !== "" && m_message !== "")
//     {
//       return true;
//         // AJAX
        // var  data = {
        //     'mail': e_mail,
        //     'phone': p_phone,
        //     'messages': m_message
        // };

        // let xhtp =  new XMLHttpRequest();
        // 
        // xhtp.onreadystatechange = function () 
        // {
        //     if (this.readyState == 4 && this.status == 200) {
        //         document.querySelector('.response').innerHTML = this.responseText;
        //         document.querySelector('.response').style.display = "block";
        //         alert(this.responseText);
        //     }

        //     alert(send(JSON.stringify(data))); 

        // }
        // xhtp.open('POST', 'inc/manage_mail.php', true);
        // xhtp.setRequestHeader("Content-Type", "application/json");
        // xhtp.send(JSON.stringify(data));

        // setTimeout(() => {
        //     document.querySelector('.response').style.display = 'none';
        // }, 5000);
        // })
//     }

// })

// })



