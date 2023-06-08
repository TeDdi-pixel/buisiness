
const searchInput = document.getElementById('search');
const searchBtn = document.querySelector('.header__btn button');
const searchIMG = document.getElementById('searchIMG');
const btn_search = document.querySelector('.btn-lg');
function searchProd() {
    let id = document.getElementById("search").value;
    console.log(id);
    location.href='http://localhost:3000/OSPanel/domains/courseWork/product.php?id='+ id;
}

searchInput.addEventListener("keypress", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    searchProd();
  }
});
// функция, которая сбрасывает стили и анимацию
function resetSearchStyles() {
  searchInput.style.borderColor = '#ccc';
  searchBtn.style.borderColor = '#ccc';
  searchBtn.style.transition = 'border-color 0.3s ease';
  searchInput.style.padding = '15px 10px';
  searchInput.style.transition = 'all 0.3s ease';
  btn_search.style.padding =  '15px 10px';
  btn_search.style.transition = 'padding 0.3s ease';
  searchInput.style.width = '50%';
  searchInput.style.marginLeft = '115px';

}

document.addEventListener('click', function(){
    applySearchStyles();
})
// обработчик клика на document
document.addEventListener('click', function(event) {
  // проверяем, является ли целевой элемент клика инпутом или кнопкой
  if (event.target !== searchInput && event.target !== searchBtn) {
    resetSearchStyles();
  }
});

// функция, которая применяет стили и анимацию при нажатии на кнопку поиска
function applySearchStyles() {
  searchInput.style.transition = 'all 0.3s ease';
  searchIMG.style.fill = '#e07bab';
  searchIMG.style.transition = 'fill 0.3s ease';
  searchInput.style.borderColor = '#e07bab';
  searchBtn.style.borderColor = '#e07bab';
  searchInput.style.padding = '15px 20px';
  searchBtn.style.transition = 'border-color 0.3s ease';
  
  btn_search.style.padding = '15px 20px';
  btn_search.style.transition = 'padding 0.3s ease';
  searchInput.style.width = '100%';
  searchInput.style.marginLeft = '0';
  
}

// функция, которая вызывается при фокусе на инпуте
searchInput.addEventListener('focus', function() {
  applySearchStyles();
});

// функция, которая вызывается при снятии фокуса с инпута
searchInput.addEventListener('blur', function() {
  resetSearchStyles();
});

const btnUp = {
  el: document.querySelector('.btn-up'),
  show() {
    // удалим у кнопки класс btn-up_hide
    this.el.classList.remove('btn-up_hide');
  },
  hide() {
    // добавим к кнопке класс btn-up_hide
    this.el.classList.add('btn-up_hide');
  },
  addEventListener() {
    // при прокрутке содержимого страницы
    window.addEventListener('scroll', () => {
      // определяем величину прокрутки
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
      scrollY > 400 ? this.show() : this.hide();
    });
    // при нажатии на кнопку .btn-up
    document.querySelector('.btn-up').onclick = () => {
      // переместим в начало страницы
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    }
  }
}

btnUp.addEventListener();