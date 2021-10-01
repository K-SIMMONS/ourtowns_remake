
// $(document).ready(function() {
//   let displayInput = false;
  
//   $("#searchIcon").click(function(){



//   })
//   function displayLoader(location, show){
//     show === true ? $(location).removeClass("hidden") : $(location).addClass("hidden");
//   }

// });

//Search Bar

const button = document.querySelector('.searchbutton');

button.addEventListener('click', function() {
    const press = document.querySelector('.wp-block-search__inside-wrapper');
    press.classList.toggle('display');
});

button.addEventListener('click', function() {
    const icon = document.querySelector('.has-icon');
    icon.classList.toggle('display');
});

// test carousel
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
