const beefSelect = document.getElementById('beefSelect');
const chickSelect = document.getElementById('chickSelect');
const seaSelect = document.getElementById('seaSelect');

const beef = document.querySelector('#beef');
const chicken = document.querySelector('#chicken');
const seafood = document.querySelector('#seafood');

const elements = document.querySelectorAll('.menu-title.packlunch');

elements.forEach(element => {
  element.addEventListener('click', e => {
    switch (e.target.innerText) {
      case 'Beef':
        chickSelect.classList.remove('selected');
        seaSelect.classList.remove('selected');
        chicken.classList.add('hide');
        seafood.classList.add('hide');

        beefSelect.classList.add('selected');
        beef.classList.remove('hide');
        break;
      case 'Chicken':
        beefSelect.classList.remove('selected');
        seaSelect.classList.remove('selected');
        beef.classList.add('hide');
        seafood.classList.add('hide');

        chickSelect.classList.add('selected');
        chicken.classList.remove('hide');
        break;
      case 'Seafood':
        chickSelect.classList.remove('selected');
        beefSelect.classList.remove('selected');
        chicken.classList.add('hide');
        beef.classList.add('hide');

        seaSelect.classList.add('selected');
        seafood.classList.remove('hide');
        break;
      default:
        console.log('You selected Nothing!');
    }
  });
});
