document.getElementById("reg-form").addEventListener("submit", function (event) {
    event.preventDefault();
    const form = document.getElementById("reg-form");
    let inputs = document.getElementsByClassName("reg-form__input");
    let data = {};
    for (let i = 0; i < inputs.length; i++) {
        data[inputs[i].name] = inputs[i].value;
    }

    $.post("back/register.php", data, function (data) {
        alert(data);
    });
    form.reset();
    location.href = location.href;
    //alert('');
})

document.getElementById("sign-in").addEventListener("submit", function (event) {
    event.preventDefault();
    const form = document.getElementById("sign-in");
    let inputs = document.getElementsByClassName("sign-in-form__input");
    let data = {};
    for (let i = 0; i < inputs.length; i++) {
        data[inputs[i].name] = inputs[i].value;
    }

    $.post("back/login.php", data, function (data) {
        if (data != 'Failure') {
            document.cookie = 'userID=' + data.id;
            document.cookie = 'login=' + data.login;
            console.log(document.cookie);
            if (data.isAdmin) {
                console.log('is admin');
                document.cookie = 'isAdmin=true';
            } else {
                console.log('User is not an admin');
                $('#admin-panel').remove();
            }
        };
        location.href = location.href;
    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("Ви ввели неправильні дані, спробуйте ще раз");
        console.error('Error checking admin status:', errorThrown);
    });

    form.reset();
});

document.getElementById("enter-btn").addEventListener("click", function () {
    document.cookie = 'userID=;Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    document.cookie = 'isAdmin=;Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    document.cookie = 'login=;Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    console.log(document.cookie);
    location.href = location.href;
    
})


$(function () {
    let enterBtn = document.getElementById('enter-btn');
    if (document.cookie.indexOf('userID') != -1) {
        if (document.cookie.indexOf('isAdmin=true') != -1) {
            let headerList = document.querySelector(".header__menu ul");
            let adminPanel = document.createElement("li");
            let adminPanelLink = document.createElement("a");
            adminPanelLink.href = "changeCategory.php";
            adminPanelLink.textContent = "Адмінка";
            adminPanel.appendChild(adminPanelLink);
            headerList.appendChild(adminPanel);
        }
        document.getElementById("login-pic").addEventListener("click", function (event) {
            alert("Ви вже увійшли в акаунт, спочатку вийдіть з нього");
            //location.href = location.href;
        })
        
        //let enterBtn = $('#enter-btn').html();
        let userDiv = document.getElementById('userDiv');
        userDiv.innerHTML = document.cookie.split('; ').find(row => row.startsWith('login=')).split('=')[1];
        userDiv.style.fontSize = '17px';
        enterBtn.innerHTML = 'Вийти'; 

    } else {
        
        enterBtn.innerHTML = 'Увійти'; 

    } 
})

