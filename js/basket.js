/*document.querySelector(".info-form").addEventListener("submit", function (event) {
  event.preventDefault();
  const form = document.querySelector(".info-form");
  console.dir(form);
  let inputs = document.getElementsByClassName("info-form__input");
  let data = {};
  for (let i = 0; i < inputs.length; i++) {
    data[inputs[i].name] = inputs[i].value;
  }

  $.post("back/basket.php", data);
  form.reset();
})*/

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

let allPrices = 0;

function renderCart() {
  $.post("back/cart.php", {
    userId: getCookie('userID')
  }, function (data) {
    console.log(data);
    let js = JSON.parse(data);
    console.log(js);
    let cart = {};
    let cartProdHTML = '';

    
    for (const key in js) {
      js[key].price = parseInt(js[key].price);
      allPrices += js[key].price;
      cartProdHTML += `
      <div class="product__text_wrapper"><a href="product.html" class="product__text">${js[key].name}</a></div>
                <div class="product__wrapper_main">
                
                  <ul>
                    <li class="product__wrapper">
                        <img class="product__image" src="${js[key].image}">
                    </li>
                    <li class="name quantity">
                     
                      <div class="quantity__wrapper">
                        <span class="decrease-button__wrapper"><button disabled class="minus" data-id="${js[key].id}">−</button></span>
                        <input type="number" value="1" id="number" data-id="${js[key].id}" readonly>
                        <span class="increase-button__wrapper"><button class="plus" data-id="${js[key].id}">+</button></span>
                        <ul class="price__wrapper">
                          <li class="price__text">Ціна</li>
                          <li class="price__num">${js[key].price} ₴</li>
                        </ul>
                        
                      </div>
                      </li>  
                </ul>
                <div class="product__options">
                <div class="delete__block">
                  <div class="trash_can">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
  <path d="M3,6 H21 M8,6 V4 C8,2.895 8.895,2 10,2 H14 C15.105,2 16,2.895 16,4 V6 M5,6 V20 C5,20.552 5.448,21 6,21 H18 C18.552,21 19,20.552 19,20 V6 M10,11 V17 M14,11 V17" fill="#ffffff" />
</svg>
                  </div>
                  <span class="delete__text">
                  Видалити товар
                  </span>
                </div>
                <svg viewBox="0 0 10 20" xmlns="http://www.w3.org/2000/svg" class="product__options_menu">
                  <circle cx="5" cy="6" r="1" />
                  <circle cx="5" cy="10" r="1" />
                  <circle cx="5" cy="14" r="1" />
                </svg>
                
                </div>
                </div>
                </div>
                      `
      cart[js[key].id] = {
        "startPrice": js[key].price,
        "price": js[key].price,
        "count": 1,
      }

    }
    if(allPrices === 0){
      document.querySelector('.checkout').style.display = 'none';
    }
    cartProdHTML += `
          <div class="checkout__wrapper">
          <div class="checkout">
          <span id="allPrices" class="total__price">${allPrices}</span><span class="total__price"> ₴</span>
          
          <a href="index.html"><input class="applyUserData button" type="submit" value="Оформити замовлення"></a>   
          </div>       
          </div>
          `;


    document.getElementById('cartProds').innerHTML = cartProdHTML;


    let plusButtons = document.querySelectorAll(".quantity__wrapper .plus");
    let minusButtons = document.querySelectorAll(".quantity__wrapper .minus");

    // var el = $('#number');

    // function change(v) {
    //   var upd = +el.val() + v;
    //   el.val(upd > 0 ? upd : 0);
    // };

    document.onclick = event => {
      if (event.target.classList.contains('plus'))
        plusFunc(event.target.dataset.id)
      if (event.target.classList.contains('minus'))
        minusFunc(event.target.dataset.id)
    }

    const plusFunc = id => {
      const input = document.querySelector(`#number[data-id="${id}"]`);
      cart[id]["count"]++;
      cart[id]["price"] = cart[id]["startPrice"] * cart[id]["count"];
      input.value = cart[id]["count"];
      allPrices = allPrices + cart[id]["startPrice"];
      document.getElementById("allPrices").innerHTML = allPrices;
      console.log(cart[id]);
      document.querySelector(`.quantity__wrapper .minus[data-id="${id}"]`).disabled = false;
      document.querySelector(`.quantity__wrapper .minus[data-id="${id}"]`).style.color = '#E07BAB';

    };


    /*function minusFunc(id) {
      const input = document.querySelector(`#number[data-id="${id}"]`);
      if (cart[id]["count"] > 1) {
        input.value = cart[id]["count"] - 1;
        cart[id]["count"]--;
        cart[id]["price"] = cart[id]["startPrice"] * cart[id]["count"];
        allPrices = 0;
        for (const key in cart) {
          allPrices += cart[key].price;
        }
        document.getElementById("allPrices").innerHTML = allPrices;
      } else {
        deleteFunc(id);
        deleteProd(id);
        allPrices = 0;
        for (const key in cart) {
          allPrices += cart[key].price;
        }
        document.getElementById("allPrices").innerHTML = allPrices;
      }
    }*/

    function minusFunc(id) {
      const input = document.querySelector(`#number[data-id="${id}"]`);
      if (input.value === "1") {
        if(cart[id]["count"]>1){
          cart[id]["count"]--;
          cart[id]["price"] = cart[id]["startPrice"] * cart[id]["count"];
          allPrices = 0;
          for (const key in cart) {
            allPrices += cart[key].price;
          }
          console.log(cart[id]);
          document.getElementById("allPrices").innerHTML = allPrices;
        }
        document.querySelector(`.quantity__wrapper .minus[data-id="${id}"]`).disabled = true;
        document.querySelector(`.quantity__wrapper .minus[data-id="${id}"]`).style.color = '#C8C8C8';
      } else {
        input.value = cart[id]["count"] - 1;
        if(cart[id]["count"]>1){
          cart[id]["count"]--;
          cart[id]["price"] = cart[id]["startPrice"] * cart[id]["count"];
          allPrices = 0;
          for (const key in cart) {
            allPrices += cart[key].price;
          }
          console.log(cart[id]);
          document.getElementById("allPrices").innerHTML = allPrices;
        }
        document.querySelector(`.quantity__wrapper .minus[data-id="${id}"]`).disabled = false;
      }
    }
    plusButtons.forEach(button => {
      button.addEventListener('click', () => {
        const id = button.dataset.id;
        const input = document.querySelector(`#number[data-id="${id}"]`);
        input.value = parseInt(input.value) + 1;
      });
    });
    minusButtons.forEach(button => {
      button.addEventListener('click', () => {
        const id = button.dataset.id;
        const input = document.querySelector(`#number[data-id="${id}"]`);
        input.value = parseInt(input.value) - 1;
      });
    });

    
    let optionBTN = document.querySelectorAll('.product__options_menu');
    let deleteBlock = document.querySelectorAll('.delete__block');
    
    optionBTN.forEach((btn) => {
      btn.addEventListener("click", (event) => {
        const parent = event.target.closest('.product__options');
        const deleteBlock = parent.querySelector('.delete__block');
        deleteBlock.classList.toggle('delete__block_active');
        btn.classList.toggle('product__options_menu_active'); 
        event.stopPropagation();
      });
    });
    
    document.addEventListener("click", () => {
      deleteBlock.forEach((block) => {
        block.classList.remove("delete__block_active");
        const productOptionsMenu = document.querySelector('.product__options_menu');
        productOptionsMenu.classList.remove('product__options_menu_active'); 
      });
    });
    
    deleteBlock.forEach((block) => {
      block.addEventListener("click", (event) => {
        event.stopPropagation();
        const id = event.target.closest('.product__options').previousElementSibling.querySelector('input').dataset.id;
        deleteFunc(id);
        deleteProd(id);
        allPrices = 0;
        for (const key in cart) {
          allPrices += cart[key].price;
          
        }
        event.preventDefault();
        //document.getElementById("allPrices").textContent = allPrices;
      });
    });

    document.addEventListener("click", () => {
      optionBTN.forEach((btn) => {
        btn.classList.remove('product__options_menu_active'); // Remove the class from all product__options_menu elements
      });
    });
    


    const deleteFunc = id => {
      delete cart[id];
      location.href = location.href;
      //console.log(cart[id]);

    }

    const deleteProd = id => {
      $.post("back/deleteFromCart.php", {
        productId: id,
        userId: getCookie('userID')
      }, function (data) {
        renderCart(data);
      });
      event.preventDefault();
    }


  });

}
$(function () {
  renderCart();
})