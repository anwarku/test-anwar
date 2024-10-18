import './bootstrap';

const alerts = document.querySelectorAll('[role="alert"]');

alerts.forEach(element => {
    setTimeout(() => {
        element.classList.add('none')
    }, 2000)
});