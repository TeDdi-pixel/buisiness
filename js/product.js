//$.post("back/products.php", {},)

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

function setGallery(data) {
  let js = JSON.parse(data);
  let productIMG = `<a href="${js.image}" class="product__big">
  <img src="${js.image}" class="product__big" />
</a>`;
  for (let i = 0;i<3;i++) {
    productIMG += `
        <a href="${js.image}" class="product__small">
                <img src="${js.image}" class="product__small" />
              </a>`;
  }
  document.getElementById('gallery').innerHTML = productIMG;
}

function setProdDescr(data) {
  let js = JSON.parse(data);
  let productNameHTML = '';

  productNameHTML += `<h2 class="product__title">
      ${js.name}
      </h2>`;
  document.getElementById('prod_name').innerHTML = productNameHTML;


  let productAttrHTML = '';
  productAttrHTML += `<tbody>`;
  for (const featureName in js['features']) {
    productAttrHTML += `
          <tr class="product__attr-item">
          <td>${featureName}</td>
          <td>${js['features'][featureName]}</td>
        </tr>`;
  }
  productAttrHTML += `
        </tbody>`;

        
  document.getElementById('prod_attr').innerHTML = productAttrHTML;
}


function setFeatures(data) {
  console.log(data);
  setGallery(data);
  setProdDescr(data);
  prodBuy(data);
  let js = JSON.parse(data);
  let featuresHTML = '';

  featuresHTML += `
      <thead>

      </thead>
      <tbody>`;
  for (const featureName in js['features']) {
    featuresHTML += `
        <tr>
          <td>${featureName}</td>
          <td>${js['features'][featureName]}</td>
        </tr>`
  }
  featuresHTML += `
        </tbody>
        `;
  document.getElementById('features').innerHTML = featuresHTML;
  
}
//тут добавил
//  function addToCart(id){
//   console.log(id);
//   $.post("back/addToCart.php",{userId : getCookie('userID'), productId : id});
// }
//
function getProd(id) {
  $.post("back/product.php", {
    id: id
  }, setFeatures)
}
//тут добавил
function prodBuy(data){
  let js = JSON.parse(data);
  let prodBuyHTML = '';
  prodBuyHTML += `
  <div class="product__left">
  <ul>
    <li>
      <div class="product__special">
        <span>${js.price} ₴</span>
      </div>
    </li>
  </ul>
</div>
<div class="product__right">
  <div class="product__code">
    <span
      >Код товару: ${js.id}</span
>
  </div>
</div>
<div class="product__buy-block">
  <div class="product__buttons">
    <button
      type="button"
      id="${js.id}"
      data-loading-text="Завантаження..."
      class="product__card button purchase" 
    >
      Придбати
    </button>
  </div>
  </div>
</div>
</div>`;
document.getElementById('product__buy').innerHTML = prodBuyHTML;
console.log(js.id);
document.getElementById(js.id).addEventListener("click", function(event){
  console.log(event.target.id);
$.post("back/addToCart.php",{userId : getCookie('userID'), productId : event.target.id},function(data){console.log(data);
})
})}
