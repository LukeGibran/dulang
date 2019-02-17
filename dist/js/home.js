const success = document.querySelector('span.success');
const warn = document.querySelector('span.warn');
const danger = document.querySelector('span.danger');
setTimeout(() => {
  if (success) {
    success.style.display = 'none';
  }

  if (warn) {
    warn.style.display = 'none';
  }

  if(danger){
    danger.style.display = 'none';
  }
}, 3000);
