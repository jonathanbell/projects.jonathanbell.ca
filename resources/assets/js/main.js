console.log('Welcome to my website!');

document.querySelector('h1').onclick = function() {
  window.location.href = '/';
};

const status = document.querySelectorAll('.status')[0];

if (typeof status !== 'undefined') {
  status.onclick = function() {
    this.remove();
  };
}
