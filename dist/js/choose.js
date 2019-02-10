const images = document.querySelectorAll('.img');
const link = document.querySelector('.btn-link');
const addHiglight = type => {
  images.forEach(image => image.classList.remove('selected'));
  document.querySelector(`.${type}`).classList.add('selected');
};

images.forEach(image => {
  image.addEventListener('click', e => {
    let select = e.target.closest('.img').dataset.name;
    if (select == 'Wedding') {
      addHiglight('wedding');
      link.setAttribute('href', 'wedding.php');
    } else if (select == 'Catering') {
      addHiglight('catering');
      link.setAttribute('href', 'catering.php');
    } else if (select == 'Packlunch') {
      addHiglight('packlunch');
      link.setAttribute('href', 'packlunch.php');
    }
  });
});
