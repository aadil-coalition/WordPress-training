// get the hamburger menu
const hamburger = document.querySelector(".hamburger-lines");
// get the nav element
const nav = document.querySelector(".mobile-nav+nav");

// get all plus btn
const PlusButtonArr = document.querySelectorAll(".fa-plus");

// get all list items
const sub_footer_list_array = document.querySelectorAll(".sub-footer-list");

hamburger.addEventListener("click", function() {
    nav.classList.toggle("display-none");
    }
);

console.log(sub_footer_list_array[1]);
// toggling colapsing ul on click
PlusButtonArr.forEach((element) => {
    element.addEventListener('click', () => {
      const toBeDisplayed = sub_footer_list_array[parseInt(element.classList[1].substring(1))];
      if(toBeDisplayed.style.height !== "100%") {
        toBeDisplayed.style.height = "100%";
        // element.setAttribute('src', './assets/Homepage/Left.svg');
      } else {
        toBeDisplayed.style.height = "0px";
        // element.setAttribute('src', './assets/Homepage/Right.svg');
      }
    });
  });