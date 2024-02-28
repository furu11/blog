$(function() {
  const button = document.getElementById('external-folder-button');
  button.addEventListener('click', function() {
    window.location.href = 'index.php#target-element';
  });
  
  const buttons = document.getElementById('external-folder-buttons');
  buttons.addEventListener('click', function() {
    window.location.href = 'index.php#target-elements';
  });

  const btn = document.getElementById('external-folder-btn');
  btn.addEventListener('click', function() {
    window.location.href = 'index.php#target-element';
  });
  
  const btns = document.getElementById('external-folder-btns');
  btns.addEventListener('click', function() {
    window.location.href = 'index.php#target-elements';
  });

  
});