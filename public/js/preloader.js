const preloader = document.getElementById('section-preloader');
const spinner = preloader.querySelector('.preloader-spinner');
document.body.classList.add('no-scroll');
const spinDuration = Math.floor(Math.random() * 2 + 1) + 's';
const spinStart = Math.floor(Math.random() * 360) + 'deg';
const spinEnd = spinStart === '0deg' ? '360deg' : '0deg';

spinner.style.setProperty('--spin-duration', spinDuration);
spinner.style.setProperty('--spin-start', spinStart);
spinner.style.setProperty('--spin-end', spinEnd);

setTimeout(() => {
    preloader.style.opacity = '0';
    setTimeout(() => {
        preloader.style.display = 'none';
        document.body.classList.remove('no-scroll');
    }, 300);
}, 1100);
