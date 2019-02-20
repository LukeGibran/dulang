const confirm_orders = document.getElementById('confirm_orders');
const pending_orders = document.getElementById('pending_orders');
const cancelled_orders = document.getElementById('cancelled_orders');

const confirm = document.querySelector('#confirm');
const pending = document.querySelector('#pending');
const cancelled = document.querySelector('#cancelled');

const elements = document.querySelectorAll('.verdict');


const modal = document.querySelector('.modal');

elements.forEach(element => {
  element.addEventListener('click', e => {
    switch (e.target.innerText) {
      case 'Pending':
        confirm.classList.remove('selected');
        cancelled.classList.remove('selected');
        confirm_orders.classList.add('hide');
        cancelled_orders.classList.add('hide');   

        pending.classList.add('selected');
        pending_orders.classList.remove('hide');
        break;
      case 'Confirm':
      pending.classList.remove('selected');
      cancelled.classList.remove('selected');
      pending_orders.classList.add('hide');
      cancelled_orders.classList.add('hide');   

      confirm.classList.add('selected');
      confirm_orders.classList.remove('hide');
        break;
      case 'Cancelled':
      confirm.classList.remove('selected');
      pending.classList.remove('selected');
      confirm_orders.classList.add('hide');
      pending_orders.classList.add('hide');   

      cancelled.classList.add('selected');
      cancelled_orders.classList.remove('hide');
        break;
      default:
        console.log('You selected Nothing!');
    }
  });
});


setTimeout(()=>{
  modal.style.display = 'none';
}, 3000);
