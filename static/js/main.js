window.addEventListener('DOMContentLoaded', () => {
    console.log('scrip ok');
    const path = document.querySelector('path');
    if(!path) return;

    const pathLength = path.getTotalLength();

    path.style.strokeDasharray = pathLength;
    path.style.strokeDashoffset = pathLength;
    path.style.transition = 'stroke-dashoffset 0.2s ease-out';

    const maxScroll = 300;  


    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;
    const scrollPercent = Math.min(currentScroll / maxScroll, 1);  
    const draw = pathLength * scrollPercent;
    path.style.strokeDashoffset = pathLength - draw;
    });
});