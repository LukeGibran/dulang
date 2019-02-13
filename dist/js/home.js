const success = document.querySelector('span.success');
const warn = document.querySelector('span.warn');
setTimeout(() => {
  if (success) {
    success.style.display = 'none';
  }

  if (warn) {
    warn.style.display = 'none';
  }
}, 3000);
